<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id('idMascota')->primary();
            $table->string('nombre');
            $table->string('raza');
            $table->integer('edad');
            $table->enum('tamano', ['pequeno', 'mediano', 'grande']);
            $table->string('tipoAnimal');
            $table->enum('sexo', ['macho', 'hembra']);
            $table->string('foto_mascotas')->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('mascotas');
    }
};
