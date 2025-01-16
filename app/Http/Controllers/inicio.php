<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Mascota;
use App\Models\Opinion;

class inicio {
    public function index() {
        $mascotas = Mascota::all();
        $opiniones = Opinion::all();
        return view('inicio', compact('mascotas', 'opiniones'));
    }

    public function storeOpinion(Request $request) {

        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id_usuarios',
            'idMascota' => 'required|exists:mascotas,idMascota',
            'comentario' => 'required|string|max:500',
        ]);
    
        $usuario = Session::get('usuario');
        $nombreUsuario = $usuario->nombre;

        DB::table('opiniones')->insert([
            'id_usuarios' => $request->input('id_usuario'),
            'idMascota' => $request->input('idMascota'),
            'nombre_usuario' => $nombreUsuario,
            'nombre_mascota' => $request->input('nombre_mascota'),
            'foto_mascota' => $request->input('foto_mascota'),
            'comentario' => $request->input('comentario'),
        ]);
    
        return redirect('/');
    }
}
