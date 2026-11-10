<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::orderBy('nome', 'asc')->get();
        return view('home', ['alunos' => $alunos]);
    }

    public function create()
    {
        return view('new');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'matricula' => 'required|numeric',
        ]);

        Aluno::create($validated);

        return redirect('/')->with('msg', 'Aluno cadastrado com sucesso.');
    }

    public function destroy($id)
    {
        Aluno::findOrFail($id)->delete();
        return redirect('/')->with('msg', 'Aluno excluído com sucesso.');
    }

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('edit', ['aluno' => $aluno]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'matricula' => 'required|numeric',
        ]);

        $aluno = Aluno::findOrFail($id);
        $aluno->update($validated);

        return redirect('/')->with('msg', 'Aluno atualizado com sucesso.');
    }
}

