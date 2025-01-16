<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model {

    protected $table = 'mascotas';

    protected $primaryKey = 'idMascota';

    protected $fillable = ['nombre', 'raza', 'edad', 'tamano', 'tipoAnimal', 'sexo', 'foto_mascotas'];

    public $timestamps = false;
}
