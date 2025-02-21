@extends('layout.base');
@section('title', 'Controle de Alunos');
@section('new', 'active');
@section('content')
<form action="/alunos/save" method="post" class="form">
@csrf
<div class="form-group mb-3">
    <label for="nome">Nome: </label>
    <input type="text" name="nome" class="form-control">
</div>
<div class="form-group mb-3">
    <label for="email">E-mail: </label>
    <input type="email" name="email" attern=".+@example\.com" size="30" class="form-control">
</div>
<div class="form-group mb-3">
    <label for="matricula">Matrícula: </label>
    <input type="number" name="matricula" min="0" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
@endsection