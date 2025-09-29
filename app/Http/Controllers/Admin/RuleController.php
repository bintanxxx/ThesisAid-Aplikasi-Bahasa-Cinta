<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LoveLanguage;
use App\Models\Rule;
use App\Models\Symptom;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rules = Rule::with(['symptom', 'love_language'])->lates()->paginate(10);
        return view('admin.rules.index', compact('rules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $symptoms = Symptom::all();
        $love_languages = LoveLanguage::all();
        return view('admin.rules.create', compact('symptoms', 'love_languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'symptom_id' => 'required|exists:symptoms,id',
            'love_language_id' => 'required|exists:love_languages,id',
            'cf_expert' => 'required|numeric|min:0|max:1',
        ]);

        Rule::create($validated);
        return redirect()->route('admin.rules.index')->with('success', 'Aturan baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Rule $rule)
    {
        //
        $symptoms = Symptom::all();
        $love_languages = LoveLanguage::all();
        return view('admin.rules.edit', compact('rule', 'symptoms', 'love_languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rule $rule)
    {
        //
        $validated = $request->validate([
            'symptom_id' => 'required|exists:symptoms,id',
            'love_language_id' => 'required|exists:love_languages,id',
            'cf_expert' => 'required|numeric|min:0|max:1',
        ]);
        
        $rule->update($validated);
        return redirect()->route('admin.rules.index')->with('success', 'Aturan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rule $rule)
    {
        //
        $rule->delete();
        return redirect()->route('admin.rules.index')->with('success', 'Aturan berhasil dihapus.');
    }
}
