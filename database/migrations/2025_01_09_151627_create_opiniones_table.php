<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpinionesTable extends Migration {
    public function up() {
        Schema::create('opiniones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuarios');
            $table->unsignedBigInteger('idMascota');
            $table->foreign('id_usuarios')->references('id_usuarios')->on('usuarios')->onDelete('cascade');
            $table->foreign('idMascota')->references('idMascota')->on('mascotas')->onDelete('cascade');
            $table->string('nombre_usuario');
            $table->string('nombre_mascota');
            $table->string('foto_mascota');
            $table->text('comentario');
        });
    }

    public function down() {
        Schema::dropIfExists('opiniones');
    }
}
