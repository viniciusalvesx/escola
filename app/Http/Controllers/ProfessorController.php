<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Redirect;
class ProfessorController extends Controller
{
    public function index(){
        
        $professor = Professor::get();
        return view('professor.list', ['professor' => $professor]);
    }
    public function new(){
        return view('professor.form');
    }
    public function add(Request $request){
        $professor = new Professor;
        $professor = $professor->create($request->all());
        return Redirect::to('/professor');
    }
    public function edit($id){
        $professor = Professor::findOrFail($id);
        return view('professor.form', ['professor' => $professor]);
    }
    public function update( $id, Request $request){
        $professor = Professor::findOrFail($id);
        $professor->update($request->all());
        return Redirect::to('/professor');
    }
    public function delete($id){
        $professor = Professor::findOrFail($id);
        $professor->delete();
        return Redirect::to('/professor');
    }
}
