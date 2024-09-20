<?php

namespace App\Models\Aiex_System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricula',
        'nome',
        'email',
        'telefone',
        'semestre_ingresso',
    ];
}
