<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {
        Schema::create('ficha_salud', function (Blueprint $table) {
            $table->id('idFicha');
            $table->BigInteger('idMascota');
            $table->foreign('idMascota')->references('idMascota')->on('mascotas')->onDelete('cascade');
            $table->integer('MicroChip');
            $table->longText('vacunasPuestas');
            $table->longText('vacunasPendientes');
            $table->mediumText('alergias');
            $table->float('peso');
            $table->boolean('esterilizacion');
            $table->boolean('desparasitacion');
        });
    }

    public function down(): void {
        Schema::dropIfExists('ficha_salud');
    }
};
