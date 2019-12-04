<?php

namespace App\Http\Controllers;

use App\Lagoa;
use App\Biologica;
use App\Fisico_quimica;
use App\Localidade;
use Illuminate\Http\Request;

class LagoaController extends Controller
{
    public function index()
    {
        $lagoas = Lagoa::all();
        //return view('lagoas_listar', compact('lagoas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $localidades = Localidade::all();
        //$fisicoquimicas = Fisicoquimica::all();
        $biologicas = Biologica::all();
        return view('cadastro_lagoas', compact('localidades', /*'fisicoquimicas',*/ 'biologicas'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lagoa = new Lagoa();
        $lagoa->nome = $request->input("nome");
        $lagoa->descricao = $request->input("descricao");
        
        $lagoa->bairro = $request->input("bairro");
        $lagoa->ponto_ref = $request->input("ponto_ref");

        $lagoa->turbidez = $request->input("turbidez");
        $lagoa->solidos_totais = $request->input("solidos_totais");
        $lagoa->condutividade = $request->input("condutividade");
        $lagoa->ph = $request->input("ph");
        $lagoa->nitrogenio = $request->input("nitrogenio");
        $lagoa->oxigenio = $request->input("oxigenio");
        $lagoa->gas_carbonico = $request->input("gas_carbonico");
        $lagoa->temperatura = $request->input("temperatura");
        $lagoa->cloretos = $request->input("cloretos");
        $lagoa->dureza = $request->input("dureza");
        $lagoa->alcalinidade = $request->input("alcalinidade");

        $lagoa->coliformes = $request->input("coliformes");
        $lagoa->bacterias = $request->input("bacterias");

        /*$lagoa->fisicoquimica_id = $request->input("fisicoquimica_id");
        $lagoa->biologica_id = $request->input("biologica_id");
        $lagoa->localidade_id = $request->input("localidade_id");*/
        $lagoa->save();
        return redirect()->route('lagoas.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Lagoa  $lagoa
     * @return \Illuminate\Http\Response
     */
    public function show(Lagoa $lagoa)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lagoa  $lagoa
     * @return \Illuminate\Http\Response
     */
    public function edit(lagoa $lagoa)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lagoa  $lagoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lagoa $lagoa)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lagoa  $lagoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lagoa $lagoa)
    {
        //
    }
}
