<?php

namespace App\Http\Controllers;

use App\Localidade;
use Illuminate\Http\Request;

class LocalidadeController extends Controller
{
    public function index()
    {
        $localidades = Localidade::all();
        //return view('localidades_listar', compact('localidades'));
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
        $localidade = new Localidade();
        $localidade->bairro = $request->input("bairro");
        $localidade->ponto_ref = $request->input("ponto_ref");
        $localidade->save();
        return redirect()->route('localidades.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\localidade  $localidade
     * @return \Illuminate\Http\Response
     */
    public function show(Localidade $localidade)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\localidade  $localidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Localidade $localidade)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Localidade  $localidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Localidade $localidade)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Localidade  $localidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Localidade $localidade)
    {
        //
    } 
}
