<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados'; // Especificar el nombre de la tabla si no sigue la convención de nombres
    protected $primaryKey = 'id_empleado'; // Especificar si no es 'id'

    public function usuarios()
    {
        return $this->hasOne(Usuario::class, 'id_empleado');
    }

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'id_empleado');
    }
}

// app/Models/Usuario.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_sesion'; // Cambiar si es necesario

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'id_empleado');
    }
}

// app/Models/Venta.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'id_empleado');
    }
}

// app/Models/OrdenTrabajo.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdenTrabajo extends Model
{
    protected $table = 'ordenes_trabajo';
    protected $primaryKey = 'id_orden'; // Cambiar si es necesario
}
