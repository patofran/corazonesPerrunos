<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicio;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\listaMacotasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonacionesController;
use App\Http\Controllers\AdopcionController;

Route::get('/', [inicio::class, 'index'])->name('inicio');

Route::post('/opinion', [inicio::class, 'storeOpinion'])->name('opinion.store');

Route::get('/mascotas', [MascotaController::class, 'index']);

Route::get('/donaciones', [DonacionesController::class, 'donaciones'])->name('donaciones');

Route::get('/listaMascota', [listaMacotasController::class, 'index'])->name('listaMascota');

Route::get('/mascota/{id}', [MascotaController::class, 'show'])->name('mascota.show');

Route::get('/adoptar/{idMascota}', [AdopcionController::class, 'adoptar'])->name('adopciones');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/perfil', [AuthController::class, 'perfil'])->name('perfil');

Route::get('/perfil/adopciones', [AdopcionController::class, 'mostrarAdopciones'])->name('perfil.adopciones');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/admin/mascotas', [listaMacotasController::class, 'adminMascotas'])->name('listaMascotaAdmin');