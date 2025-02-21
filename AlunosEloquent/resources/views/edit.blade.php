@extends('layout.base');
@section('title', 'Editando aluno ' . $aluno->nome);
@section('new', 'active');
@section('content')
<form action="/alunos/{{$aluno->id}}" method="post">
@csrf
@method('PUT')
<div class="form-group mb-3">
    <label for="nome">Nome: </label>
    <input type="text" name="nome" class="form-control" value="{{$aluno->nome}}">
</div>
<div class="form-group mb-3">
    <label for="email">E-mail: </label>
    <input type="email" name="email" attern=".+@example\.com" size="30" class="form-control" value="{{$aluno->email}}">
</div>
<div class="form-group mb-3">
    <label for="matricula">Matrícula: </label>
    <input type="number" name="matricula" min="0" class="form-control" value="{{$aluno->matricula}}">
</div>
<button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection