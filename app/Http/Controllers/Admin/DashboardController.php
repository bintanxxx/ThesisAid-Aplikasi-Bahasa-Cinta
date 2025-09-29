<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rule;
use App\Models\Symptom;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // Menghitung jumlah pengguna dengan peran 'user'
        $userCount = User::where('role', 'user')->count();

        // Menghitung total gejala
        $symptomCount = Symptom::count();

        // Menghitung total aturan
        $ruleCount = Rule::count();

        // Kirim data ke view
        return view('admin.dashboard', compact('userCount', 'symptomCount', 'ruleCount'));
    }
}
