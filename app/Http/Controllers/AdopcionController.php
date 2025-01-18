<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Adopcion;

class AdopcionController {
    public function adoptar($idMascota){
        if (!Session::has('usuario')) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para adoptar.');
        }

        if (Adopcion::where('idMascota', $idMascota)->first()) {
            return redirect()->back()->with('mascota_adoptada', true);
        }

        $usuario = Session::get('usuario');

        $idUsuario = $usuario->id_usuarios;

        DB::table('adopciones')->insert([
            'id_usuarios' => $idUsuario,
            'idMascota' => $idMascota,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    
        return redirect('/perfil');
    }
}
