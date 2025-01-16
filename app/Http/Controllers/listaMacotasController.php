<?php

namespace App\Http\Controllers;

use App\Models\Mascota;

class listaMacotasController {
    public function index() {
        $mascotas = Mascota::all();
        return view('listaMascota', ['mascotas' => $mascotas]);
    }

    public function adminMascotas() {
        $mascotas = Mascota::all();
        return view('listaMascotaAdmin', ['mascotas' => $mascotas]);
    }
}
