@extends('layout.base')
@section('title', 'Editar Aluno - ' . $aluno->nome)

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow-sm">
            <div class="card-header bg-white py-3">
                <h4 class="card-title mb-0">Editar Aluno</h4>
            </div>
            <div class="card-body p-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/alunos/{{ $aluno->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome', $aluno->nome) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $aluno->email) }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="matricula" class="form-label">Matrícula</label>
                        <input type="number" id="matricula" name="matricula" min="0" class="form-control" value="{{ old('matricula', $aluno->matricula) }}" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="/" class="btn btn-outline-secondary">Voltar</a>
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
