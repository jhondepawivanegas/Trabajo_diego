<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Element;

class ElementosController extends Controller
{
    public function index() {
        $elementos = Element::all();
        return view('elementos', ['elementos' => $elementos]);
    }
}
