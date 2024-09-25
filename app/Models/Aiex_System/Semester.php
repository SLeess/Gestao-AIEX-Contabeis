<?php

namespace App\Models\Aiex_System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    protected $fillable = [
        'identificador',
        'made_by',
    ];
}
