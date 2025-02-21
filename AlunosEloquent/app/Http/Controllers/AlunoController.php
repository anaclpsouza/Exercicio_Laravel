<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index() {
        $alunos = Aluno::all();
        return view('home', ['alunos' => $alunos]);
    }

    public function create() {
        return view('new');
    }

    public function store(Request $request) {
        $aluno = new Aluno();
        $aluno->nome = $request->nome;
        $aluno->email = $request->email;
        $aluno->matricula = $request->matricula;
        $aluno->save();

        return redirect('/')->with('msg', 'Aluno cadastrado com sucesso.');
    }

    public function destroy($id) {
        Aluno::findOrFail($id)->delete();
        return redirect('/')->with('msg', 'Aluno excluído com sucesso');
    }

    public function edit($id) {
        $aluno = Aluno::findOrFail($id);
        return view('edit', ['aluno' => $aluno]);
    }

    public function update(Request $request) {
        $aluno = Aluno::findOrFail($request->id);
        $aluno->nome = $request->nome;
        $aluno->email = $request->email;
        $aluno->matricula = $request->matricula;
        $aluno->save();
        return redirect('/')->with('msg', 'Aluno Salvo');
    }
}
