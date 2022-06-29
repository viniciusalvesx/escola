<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'turno'
    ];

    public function aluno(){
        return $this->hashMany('App\Models\Alunos');
        
    }

}
