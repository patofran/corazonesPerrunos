<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Mascota;

class MascotaController {

    public function listarMascotas() {

        $mascotas = Mascota::all();
        return view('mascotas.index', compact('mascotas'));
    }

    public function show($id) {

        $mascota = DB::table('mascotas')->where('idMascota', $id)->first();
        $fichaSalud = DB::table('ficha_salud')->where('idMascota', $id)->first();

        return view('detalle', [
            'mascota' => $mascota,
            'fichaSalud' => $fichaSalud
        ]);
    }
}
