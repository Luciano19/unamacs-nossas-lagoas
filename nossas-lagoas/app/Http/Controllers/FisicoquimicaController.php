<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FisicoQuimicaController extends Controller
{
    public function index()
    {
        $fisicoquimicos = Fisicoquimico::all();
        //return view('fisicoquimicos_listar', compact('fisicoquimicos'));
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
        $fisicoquimica = new fisicoquimica();
        $fisicoquimica->turbidez = $request->input("turbidez");
        $fisicoquimica->solidos_totais = $request->input("solidos_totais");
        $fisicoquimica->condutividade = $request->input("condutividade");
        $fisicoquimica->ph = $request->input("ph");
        $fisicoquimica->nitrogenio = $request->input("nitrogenio");
        $fisicoquimica->oxigenio = $request->input("oxigenio");
        $fisicoquimica->gas_carbonico = $request->input("gas_carbonico");
        $fisicoquimica->temperatura = $request->input("temperatura");
        $fisicoquimica->cloretos = $request->input("cloretos");
        $fisicoquimica->dureza = $request->input("dureza");
        $fisicoquimica->alcalinidade = $request->input("alcalinidade");
        $fisicoquimica->save();
        return redirect()->route('fisicoquimicas.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Fisicoquimica  $fisicoquimica
     * @return \Illuminate\Http\Response
     */
    public function show(Fisicoquimica $fisicoquimica)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fisicoquimica  $fisicoquimica
     * @return \Illuminate\Http\Response
     */
    public function edit(Fisicoquimica $fisicoquimica)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fisicoquimica  $fisicoquimica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fisicoquimica $fisicoquimica)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fisicoquimica  $fisicoquimica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fisicoquimica $fisicoquimica)
    {
        //
    }
}
