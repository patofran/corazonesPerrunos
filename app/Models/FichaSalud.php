<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FichaSalud extends Model {
    use HasFactory;

    protected $table = 'ficha_salud';
    protected $primaryKey = 'idFicha';

    protected $fillable = [
        'idFicha',
        'idMascota',
        'MicroChip',
        'vacunasPuestas',
        'vacunasPendientes',
        'alergias',
        'peso',
        'esterilizacion',
        'desparasotacion'
    ];

    public $timestamps = false;
}
