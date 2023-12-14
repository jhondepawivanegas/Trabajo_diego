<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;

    protected $table = 'elements'; 

    protected $fillable = [
        'codigo',
        'nombre',
        'tipo',
        'categoria',
        'ubicacion',
        'fechaC',
        'cantidad'
    ];

    protected $casts = [
        'fechaC' => 'date', 
        'cantidad' => 'integer',
    ];
}

