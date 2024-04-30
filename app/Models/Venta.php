<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'piel',
        'horma',
        'suela',
        'tubo',
        'abono',
        'precio',
        'anticipo',
        'tipo_venta', #Si es mayoreo, menudeo o quinela, esto cambia el precio
        'nombre',
        'apellidos',
        'correo',
        'numero_telefonico',
        'tipo',
        'fecha'
    ];
}
