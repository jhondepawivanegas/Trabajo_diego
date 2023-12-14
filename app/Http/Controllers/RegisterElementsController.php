<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Element;

class RegisterElementsController extends Controller
{
    public function index(){
        return view ('auth.registroElementos');
    }
    public function store(Request $request){

      $this->validate($request, [
        'codigo' => 'required|max:30',
        'nombre' => 'required|min:3|max:60',
        'tipo' => 'required|min:3|max:30',
        'categoria' => 'required|min:3|max:30',
        'ubicacion' => 'required|min:3|max:30',
        'fechaC' => 'required|min:3|max:30',
        'cantidad' => 'required|max:2',
        ]);

        Element::create([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
            'categoria' => $request->categoria,
            'ubicacion' => $request->ubicacion,
            'fechaC' => $request->fechaC,
            'cantidad' => $request->cantidad,
        ]);

        return redirect()->route('elementos')->with('success', 'El elemento se ha registrado con éxito.');
    }
    
}
