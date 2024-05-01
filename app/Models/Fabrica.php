<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabrica extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', #Recibimos el id de la orden creada en ventas
        'piel',
        'horma',
        'suela',
        'tubo',
        'fecha',
    ];
}
