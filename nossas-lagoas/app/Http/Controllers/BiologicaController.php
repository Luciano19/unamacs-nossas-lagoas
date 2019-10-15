<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiologicaController extends Controller
{
    public function index()
    {
        $biologicas = Biologico::all();
        //return view('biologica_listar', compact('biologicas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro_lagoa');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $biologica = new biologica();
        $biologica->coliformes = $request->input("coliformes");
        $biologica->bacterias = $request->input("bacterias");
        $biologica->save();
        return redirect()->route('biologicas.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Biologica  $biologica
     * @return \Illuminate\Http\Response
     */
    public function show(Biologica $biologica)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Biologica  $biologica
     * @return \Illuminate\Http\Response
     */
    public function edit(Biologica $biologica)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\biologica  $biologica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biologica $biologica)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Biologica  $biologica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biologica $biologica)
    {
        //
    }
}
