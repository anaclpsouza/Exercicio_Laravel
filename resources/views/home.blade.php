@extends('layout.base')
@section('title', 'Controle de Alunos')
@section('home', 'active')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2 mb-0">Listagem de Alunos</h1>
        <a href="/new" class="btn btn-primary">+ Novo Aluno</a>
    </div>

    @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (count($alunos) > 0)
        <div class="card shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="ps-3">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Matrícula</th>
                                <th scope="col" class="text-end pe-3">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alunos as $aluno)
                                <tr>
                                    <td class="ps-3 fw-semibold">{{ $aluno->id }}</td>
                                    <td>{{ $aluno->nome }}</td>
                                    <td>{{ $aluno->email }}</td>
                                    <td>{{ $aluno->matricula }}</td>
                                    <td class="text-end pe-3">
                                        <div class="d-inline-flex gap-2">
                                            <a href="/alunos/{{ $aluno->id }}" title="Editar aluno {{ $aluno->nome }}"
                                                class="btn btn-sm btn-outline-secondary">Editar</a>
                                            <form action="/alunos/{{ $aluno->id }}" method="post"
                                                onsubmit="return confirm('Tem certeza que deseja excluir o aluno \'{{ $aluno->nome }}\'?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                                    title="Excluir Aluno {{ $aluno->nome }}">Excluir</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        <div class="card shadow-sm border-0 p-5 text-center">
            <div class="text-muted mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.004-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4 1 1 1 1h4.216A2.24 2.24 0 0 1 5 11.956c0-.678.223-1.32.656-1.85a4.2 4.2 0 0 1 1.28-1.026M10 8c-.767 0-1.487-.197-2.115-.544a4.4 4.4 0 0 1-.885-.688C6.38 6.09 6 5.093 6 4a4 4 0 1 1 8 0c0 1.093-.38 2.09-1 2.768a4.4 4.4 0 0 1-.885.688A6 6 0 0 1 10 8m-4.5-5a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                </svg>
            </div>
            <h5>Nenhum aluno cadastrado no momento.</h5>
            <p class="text-muted">Clique no botão abaixo para adicionar o primeiro aluno.</p>
            <div>
                <a href="/new" class="btn btn-primary">Cadastrar Novo Aluno</a>
            </div>
        </div>
    @endif
@endsection

