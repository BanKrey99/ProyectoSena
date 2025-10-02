<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $municipios = Municipio::all();
        return view('Municipio.index', compact('municipios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Municipio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Municipio::create($request->all());
        return redirect()->route('municipios.index')
        ->with('success','Municipio Creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Municipio $municipio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $municipio = Municipio::findOrfail($id);
        return view('Municipio.edit', compact('municipio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $municipio = Municipio::findOrfail($id);
        $municipio->update($request->all());
        return redirect()->route('municipios.index')->with('success','Municipio actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $municipio = Municipio::findOrfail($id);
        $municipio->delete();
        return redirect()->route('municipios.index')->with('success','Municipio eliminado exitosamente');
    }
}
