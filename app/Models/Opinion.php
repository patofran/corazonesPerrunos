<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class opinion extends Model {
    use HasFactory;

    protected $table = 'opiniones';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_usuarios',
        'idMascota',
        'nombre_usuario',
        'nombre_mascota',
        'foto_mascota',
        'comentario',
    ];

    public $timestamps = false;
}
