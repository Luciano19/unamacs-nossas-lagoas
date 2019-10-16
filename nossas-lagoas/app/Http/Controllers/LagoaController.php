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
        $lagoa->fisicoquimica_id = $request->input("fisicoquimica_id");
        $lagoa->biologica_id = $request->input("biologica_id");
        $lagoa->localidade_id = $request->input("localidade_id");
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
