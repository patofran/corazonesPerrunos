<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Adopcion extends Model{
    use HasFactory;

    protected $table = 'adopciones'; 
    protected $primaryKey = 'id_adopcion';
    
    public $timestamps = true;

    protected $fillable = [ 'id_usuarios', 'idMascota',];
}
