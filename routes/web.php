<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ElementosController;
use App\Http\Controllers\RegisterElementsController;
use App\Http\Controllers\RegisterReservationsController;
use App\Http\Controllers\BodegasController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/registro', [RegisterController::class, "index"])->name('registro');
Route::post('/registro', [RegisterController::class, "store"]);

Route::get('/registroElementos', [RegisterElementsController::class, "index"])->name('registroElementos');
Route::post('/registroElementos', [RegisterElementsController::class, "store"]);

Route::get('/registroReservas', [RegisterReservationsController::class, "index"])->name('registroReservas');
Route::post('/registroReservas', [RegisterReservationsController::class, "store"]);

Route::get('/login', [LoginController::class, "index"])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, "store"]);

Route::get('/dashboard', [PostController::class, "index"])->name('post.index');

Route::post('/logout', [LogoutController::class, "store"])->name('logout');

Route::get('/reservas', [ReservasController::class, "index"])->name('reservas');
Route::get('/usuarios', [UsuariosController::class, "index"])->name('usuarios');
Route::get('/elementos', [ElementosController::class, "index"])->name('elementos');
Route::get('/bodegas', [BodegasController::class, "index"])->name('bodegas');
