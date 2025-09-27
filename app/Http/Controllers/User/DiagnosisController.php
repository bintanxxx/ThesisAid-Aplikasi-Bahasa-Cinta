<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Symptom;
use App\Models\Diagnosis;
use App\Models\Rule;
use Illuminate\Support\Facades\Auth; // <-- Impor Auth
use Illuminate\Support\Facades\DB;   // <-- Impor DB untuk transaction

class DiagnosisController extends Controller
{
    //
    public function dashboard() {
        return view('user.dashboard');
    }

    public function showKuesioner() {
        $symptoms = Symptom::all();

        return view('user.kuesioner',[
            'symptoms' => $symptoms
        ]);
    }

    public function processDiagnose(Request $request) {
        $request->validate([
            'symptoms' => 'required|array|min:1',
        ], [
            'symptoms.required' => 'Silakan pilih setidaknya satu gejala.'
        ]);

        $selectedSymptomIds = $request->input('symptoms');

        // Ambil semua aturan yang relevan berdasarkan gejala yang dipilih
        $rules = Rule::whereIn('symptom_id', $selectedSymptomIds)->get();

        //  Kelompokkan aturan berdasarkan love_language_id
        $groupedRules = $rules->groupBy('love_language_id');

        $cfResults = [];

        // Hitung CF gabungan untuk setiap kelompok bahasa cinta
        foreach ($groupedRules as $loveLanguageId => $rulesGroup) {
            $cf_combined = 0;
            foreach ($rulesGroup as $rule) {
                // Rumus CF Combine: CF1 + CF2 * (1 - CF1)
                $cf_combined = $cf_combined + $rule->cf_expert * (1 - $cf_combined);
            }
            $cfResults[$loveLanguageId] = $cf_combined;
        }

        // Cari bahasa cinta dengan nilai CF tertinggi
        if (empty($cfResults)) {
            // Handle jika tidak ada aturan yang cocok sama sekali
            return redirect()->route('user.kuesioner')->with('error', 'Tidak ada hasil diagnosis yang cocok dengan gejala Anda.');
        }

        $highestCfValue = max($cfResults);
        $diagnosedLoveLanguageId = array_search($highestCfValue, $cfResults);

        // Simpan hasil diagnosis ke database
        $newDiagnosis = null;

        DB::transaction(function () use ($diagnosedLoveLanguageId, $highestCfValue, $selectedSymptomIds, &$newDiagnosis) {
            // Buat record utama di tabel 'diagnoses'
            $newDiagnosis = Diagnosis::create([
                'user_id' => Auth::id(),
                'love_language_id' => $diagnosedLoveLanguageId,
                'cf_final' => $highestCfValue,
            ]);

            // Buat record detail untuk setiap gejala yang dipilih
            foreach ($selectedSymptomIds as $symptomId) {
                $newDiagnosis->details()->create(['symptom_id' => $symptomId]);
            }
        });

        // Redirect ke halaman hasil dengan membawa data diagnosis baru
        return redirect()->route('user.hasil', ['diagnosisId' => $newDiagnosis->id]);
    }

    public function showHasil(Diagnosis $diagnosisId) {
        if ($diagnosisId->user_id !== Auth::id()) {
            abort(403);
        }

        return view('user.hasil', [
            'diagnosis' => $diagnosisId
        ]);
    }
}
