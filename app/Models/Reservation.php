<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    protected $fillable = [
        'categoria',
        'elemento',
        'cantidad',
        'hora de devolucion',
        'usuario',
        'estado'
    ];

    protected $casts = [
        'horaDevolucion' => 'datetime:H:i',
        'cantidad' => 'integer',
    ];

}
