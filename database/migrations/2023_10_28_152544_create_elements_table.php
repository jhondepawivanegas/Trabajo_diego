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
        Schema::create('elements', function (Blueprint $table) {
            $table->string('codigo')->unique();
            $table->string('nombre');
            $table->enum('tipo', ['Consumible', 'Devolutivo']);
            $table->string('cantidad');
            $table->enum('categoria', ['Herramientas', 'Quimicos', 'Aseo', 'Tecnologicos', 'Oficina']);
            $table->enum('ubicacion', ['Bodega1-Room1', 'Bodega1-Room2', 'Bodega2-Room1', 'Bodega2-Room2']);
            $table->string('fechaC');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('elements', function (Blueprint $table) {
            $table->dropColumn('element');
        });
    }
};
