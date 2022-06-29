<?php

namespace App\Http\Controllers;
use App\Models\Turmas;
use App\Models\Alunos;
use Illuminate\Http\Request;
use Redirect;
class TurmasController extends Controller
{
    public function index(){
        
        $turmas = Turmas::get();
        return view('turmas.list', ['turmas' => $turmas]);
    }
    
    public function new(){
        return view('turmas.form');
    }
    public function add(Request $request){
        $turma = new Turmas;
        $turma = $turma->create($request->all());
        return Redirect::to('/turmas');
    }
    public function edit($id){
        $turma = Turmas::findOrFail($id);
        return view('turmas.form', ['turma' => $turma]);
    }
    public function update( $id, Request $request){
        $turma = Turmas::findOrFail($id);
        $turma->update($request->all());
        return Redirect::to('/turmas');
    }
    public function delete($id){
        $turma = Turmas::findOrFail($id);
        $turma->delete();
        return Redirect::to('/turmas');
    }
    public function listar( $id ){
        $alunos = Alunos::where ( 'turma_id' , $id ) -> get();
        return view('turmas.listarAlunos', compact('alunos'));
    }
}
