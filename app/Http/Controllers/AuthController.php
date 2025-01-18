<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController {

    public function showLoginForm() {
        return view('login');
    }

    public function showRegisterForm() {
        return view('register');
    }

    public function register(Request $request) {
        $data = $request->validate([
            'dni' => 'required|unique:usuarios|max:15',
            'nombre' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'correo' => 'required|email|unique:usuarios|max:150',
            'telefono' => 'required|max:15',
            'contrasena' => 'required|min:6',
        ]);

        Usuario::create($data);

        return redirect('/login')->with('success', 'Cuenta creada exitosamente. ¡Inicia sesión!');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'correo' => 'required|email',
            'password' => 'required',
        ]);

        $usuario = Usuario::where('correo', $credentials['correo'])->first();

        if ($usuario && Hash::check($credentials['password'], $usuario->contrasena)) {
            Session::put('usuario', $usuario);
            return redirect('/');
        }

        return back()->withErrors([
            'auth' => 'Las credenciales no coinciden con nuestros registros.',
        ])->withInput();
    }

    public function perfil() {
        if (!Session::has('usuario')) {
            return redirect('/login')->withErrors(['auth' => 'Debes iniciar sesión primero.']);
        }
    
        $usuario = Session::get('usuario');
        $idUsuario = $usuario->id_usuarios;
        
        $mascotasAdoptadas = Mascota::join('adopciones', 'mascotas.idMascota', '=', 'adopciones.idMascota')
            ->where('adopciones.id_usuarios', $idUsuario)
            ->get(['mascotas.*']);

        return view('perfil', [
            'usuario' => $usuario,
            'mascotasAdoptadas' => $mascotasAdoptadas
        ]);
    }
    
    
    public function logout() {
        Session::forget('usuario');
        return redirect('/')->with('success', 'Sesión cerrada correctamente.');
    }
}
