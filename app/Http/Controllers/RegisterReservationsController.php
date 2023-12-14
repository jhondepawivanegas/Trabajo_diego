<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class RegisterReservationsController extends Controller
{
    public function index(){
        return view ('auth.registroReservas');
    }
    public function store(Request $request){

        $this->validate($request, [

          'categoria' => 'required|min:3',
          'elemento' => 'required|min:3|max:60',
          'cantidad' => 'required|max:2',
          'horaDevolucion' => 'required|min:3|max:30',
          'usuario' => 'required|min:3|max:30',
          'estado' => 'required|min:3|max:30'
          
          ]);
  
          Reservation::create([

              'categoria' => $request->categoria,
              'elemento' => $request->elemento,
              'cantidad' => $request->cantidad,
              'horaDevolucion' => $request->horaDevolucion,
              'usuario' => $request->usuario,
              'estado' => $request->estado
              
          ]);
          return redirect()->route('registroReservas')->with('success', 'La reserva se ha registrado con éxito.');
      }
}
