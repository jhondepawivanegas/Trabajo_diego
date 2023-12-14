<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->enum('categoria',['aseo','quimico','herramienta','oficina','tecnologicos']);
            $table->enum('elemento', ['computador','archivador','resma','jabon_polvo','trapero','escoba','video_beam','router','escritorio','cloro','insecticida','abono','taladro','soldador','guadaña']);
            $table->enum('cantidad',['1','2','3','4','5','6','7','8','9']);
            $table->time('horaDevolucion');
            $table->string('usuario');
            $table->enum('estado', ['solicitado', 'aceptado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
