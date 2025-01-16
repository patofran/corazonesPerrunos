<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Usuario extends Model {
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuarios';

    public $timestamps = false;

    protected $fillable = ['dni', 'nombre', 'apellidos', 'correo', 'telefono', 'contrasena'];
    
    public function setContrasenaAttribute($value) {
        $this->attributes['contrasena'] = Hash::make($value);
    }
}

