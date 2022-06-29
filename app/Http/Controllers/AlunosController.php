<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alunos;
use App\Models\Turmas;
use Redirect;
class AlunosController extends Controller
{
    public function index(){
        
        $alunos = Alunos::with(['turmas'])->get();
        return view('alunos.list', compact('alunos'));
    }
    public function new(){
        $turmas = Turmas::all();
        return view('alunos.form', compact('turmas'));
    }
  
    public function add(Request $request){
        $aluno = new Alunos;
        $aluno = $aluno->create($request->all());
        return Redirect::to('/alunos');
    }
    public function edit($id){
        $turmas = Turmas::get();
        $aluno = Alunos::findOrFail($id);
        return view('alunos.form', ['aluno' => $aluno], ['turmas' => $turmas]);
    }
    public function update( $id, Request $request){
        $aluno = Alunos::findOrFail($id);
        $aluno->update($request->all());
        return Redirect::to('/alunos');
    }
    public function delete($id){
        $aluno = Alunos::findOrFail($id);
        $aluno->delete();
        return Redirect::to('/alunos');
    }
}