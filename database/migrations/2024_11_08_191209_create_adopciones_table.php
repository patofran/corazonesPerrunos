<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdopcionesTable extends Migration {
    public function up() {
        Schema::create('adopciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuarios');
            $table->unsignedBigInteger('idMascota');
            $table->timestamps();

            $table->foreign('id_usuarios')->references('id_usuarios')->on('usuarios')->onDelete('cascade');
            $table->foreign('idMascota')->references('idMascota')->on('mascotas')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('adopciones');
    }
}
