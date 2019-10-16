@extends('layout.base',["current"=>"lagoas"])

@section('tela')
    <form action = "{{route('lagoas.store')}}" method = "POST">
    @csrf
        <label for="nome">Nome</label>
        <input  type = "text" class = "form-control" id="nome" name="nome">
    </form>
@endsection