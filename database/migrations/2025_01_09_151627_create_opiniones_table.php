<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpinionesTable extends Migration {
    public function up() {
        Schema::create('opiniones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuario')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('idMascota')->constrained('mascotas')->onDelete('cascade');
            $table->string('nombre_usuario');
            $table->string('foto_mascota');
            $table->text('comentario');
        });
    }

    public function down() {
        Schema::dropIfExists('opiniones');
    }
}
