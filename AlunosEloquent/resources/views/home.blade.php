@extends('layout.base');
@section('title', 'Controle de Alunos');
@section('home', 'active');
@section('content')
    @if (Session::has('msg'))
        <p class="alert alert-info">{{ Session::get('msg') }}</p>
    @endif
    @if (count($alunos) > 0)
        <table class="table">
            <thead>
                <th scope="col">ID: </th>
                <th scope="col">Nome: </th>
                <th scope="col">E-mail: </th>
                <th scope="col">Matrícula: </th>
            </thead>
            <tbody>
                @foreach ($alunos as $aluno)
                    <tr>
                        <th>{{ $aluno->id }}</th>
                        <td>{{ $aluno->nome }}</td>
                        <td>{{ $aluno->email }}</td>
                        <td>{{ $aluno->matricula }}</td>
                        <td>
                            <a href="/alunos/{{ $aluno->id }}" title="Editar aluno {{ $aluno->nome }}"
                                class="btn btn-secondary">Editar</a>
                        </td>
                        <td>
                            <form action="/alunos/{{ $aluno->id }}" method="post"
                                onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    title="Excluir Aluno {{ $aluno->nome }}">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-warning" role="alert">Não há projetos cadastrados.</div>
    @endif
@endsection
