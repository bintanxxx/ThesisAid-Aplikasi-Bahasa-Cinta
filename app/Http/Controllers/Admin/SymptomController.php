<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Symptom;

class SymptomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $symptoms = Symptom::paginate(10);
        return view('admin.symptoms.index', compact('symptoms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.symptoms.create');
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
            'code' => 'required|string|unique:symptoms,code|max:5',
            'name' => 'required|string',
        ]);

        Symptom::create($validated);

        return redirect()->route('admin.symptoms.index')->with('success', 'Gejala baru berhasil ditambahkan.');
    }

    public function edit(Symptom $symptom)
    {
        return view('admin.symptoms.edit', compact('symptom'));
    }

    public function update(Request $request, Symptom $symptom)
    {
        $validated = $request->validate([
            'code' => 'required|string|max:5|unique:symptoms,code,' . $symptom->id,
            'name' => 'required|string',
        ]);
        $symptom->update($validated);
        return redirect()->route('admin.symptoms.index')->with('success', 'Data gejala berhasil diperbarui.');
    }

    public function destroy(Symptom $symptom)
    {
        $symptom->delete();
        return redirect()->route('admin.symptoms.index')->with('success', 'Data gejala berhasil dihapus.');
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
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
}
