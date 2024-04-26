<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


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
        //Este evento se activa cuando se crea un nuevo empleado
 protected static function boot()
    {
        parent::boot();

        static::created(function ($empleado) {
            // Crea un usuario con la contraseña predeterminada y asigna el id_empleado
            $user = User::create([
                'name' => $empleado->nombre, // Nombre del empleado como nombre de usuario
                'email' => $empleado->correo, // Correo electrónico del empleado
                'password' => bcrypt('12345678'), // Contraseña predeterminada
                'id_empleado' => $empleado->tipo, // Asigna el id_empleado al usuario
            ]);
        });
    }
}
