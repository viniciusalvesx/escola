<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'email',
        'escola',
        'endereco',
        'turma_id'
        
    ];

    public function turmas(){
       
        return $this->belongsTo('App\Models\Turmas', 'turma_id');
    }
}
