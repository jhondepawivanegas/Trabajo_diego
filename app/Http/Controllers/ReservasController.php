<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservasController extends Controller
{
    public function index() {
        $reservas = Reservation::all();
        return view('reservas', ['reservas' => $reservas]);
    }
}
