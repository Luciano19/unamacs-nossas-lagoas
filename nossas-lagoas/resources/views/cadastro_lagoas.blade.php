@extends('layout.base',["current"=>"lagoas"])

@section('tela')
    <form action = "{{route('lagoas.store')}}" method = "POST">
    @csrf
        <label for="nome">Nome</label>
        <input  type = "text" class = "form-control" id="nome" name="nome">
        <br/>
        <label for="descricao">Descrição</label>
        <input  type = "text" class = "form-control" id="descricao" name="descricao">

        <h3>Localidade</h3>
        <label for="bairro">Bairro</label>
        <input  type = "text" class = "form-control" id="bairro" name="bairro">
        <br/>
        <label for="ponto_ref">Ponto de Referência</label>
        <input  type = "text" class = "form-control" id="ponto_ref" name="ponto_ref">

        <h3>Análise Fisico-Quimica</h3>
        <label for="turbidez">Turbidez</label>
        <input  type = "text" class = "form-control" id="turbidez" name="turbidez">
        <br/>
        <label for="solidos_totais">Solidos Totais</label>
        <input  type = "text" class = "form-control" id="solidos_totais" name="solidos_totais">
        <br/>
        <label for="condutividade">Condutividade</label>
        <input  type = "text" class = "form-control" id="condutividade" name="condutividade">
        <br/>
        <label for="ph">PH</label>
        <input  type = "text" class = "form-control" id="ph" name="ph">
        <br/>
        <label for="nitrogenio">Nitrognio</label>
        <input  type = "text" class = "form-control" id="nitrogenio" name="nitrogenio">
        <br/>
        <label for="oxigenio">Oxigênio</label>
        <input  type = "text" class = "form-control" id="oxigenio" name="oxigenio">
        <br/>
        <label for="gas_carbonico">Gás Carbônico</label>
        <input  type = "text" class = "form-control" id="gas_carbonico" name="gas_carbonico">
        <br/>
        <label for="temperatura">Temperatura</label>
        <input  type = "text" class = "form-control" id="temperatura" name="temperatura">
        <br/>
        <label for="cloretos">Cloretos</label>
        <input  type = "text" class = "form-control" id="cloretos" name="cloretos">
        <br/>
        <label for="dureza">Dureza</label>
        <input  type = "text" class = "form-control" id="dureza" name="dureza">
        <br/>
        <label for="alcalinidade">Alcalinidade</label>
        <input  type = "text" class = "form-control" id="alcalinidade" name="alcalinidade">
        
        <h3>Análise Biológica</h3>
        <label for="coliformes">Coliformes</label>
        <input  type = "text" class = "form-control" id="coliformes" name="coliformes">
        <br/>
        <label for="bacterias">Bacterias</label>
        <input  type = "text" class = "form-control" id="bacterias" name="bacterias">
        
        <br/>
        <button class="btn btn-lg btn-block text-uppercase font-weight-bold"  type="submit" id="button">Cadastrar</button>
    </form>
@endsection