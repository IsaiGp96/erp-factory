<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{

    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidos',
        'curp',
        'rfc',
        'fecha_nac',
        'departamento',
        'puesto',
        'correo',
        'numero_telefonico',
        'tipo',
    ];
}
