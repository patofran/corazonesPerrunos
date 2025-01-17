<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuarios')->primary();
            $table->string('dni', 15)->unique();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('correo');
            $table->integer('telefono');
            $table->string('contrasena');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
