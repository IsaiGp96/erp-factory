<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Administracion;

class AdministracionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('administracion.usuarios', [
            'usuarios' => Empleados::all()
        ]);
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Se reciben datos del form
    $nombre = $request->get('nombre');
    $apellidos = $request->get('apellidos');
    $curp = $request->get('curp');
    $rfc = $request->get('rfc');
    $fecha_nac = $request->get('fecha_nac');
    $departamento = $request->get('departamento');
    $puesto = $request->get('puesto');
    $correo = $request->get('correo');
    $numero_telefonico = $request->get('numero_telefonico');
    $tipo = $request->get('tipo');

    //INSERT INTO DATABASE
    Empleados::create([
        'nombre' => $nombre,
        'apellidos' => $apellidos,
        'curp' => $curp,
        'rfc' => $rfc,
        'fecha_nac' => $fecha_nac,
        'departamento' => $departamento,
        'puesto' => $puesto,
        'correo' => $correo,
        'numero_telefonico' => $numero_telefonico,
        'tipo' => $tipo,
    ]);

    return to_route('administracion.usuarios');

    }

    /**
     * Display the specified resource.
     */
    public function show(Administracion $administracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $administracion)
    {

        $administracion = Empleados::findOrFail($administracion);
        return view('administracion.editarUsuarios',[
            'usuario' => $administracion
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $usuario)
    {
        $empleado  = Empleados::findOrFail($usuario);
        $validated = $request->validate([
        'nombre' => ['required'],
        'apellidos' => ['required'],
        'curp' => ['required'],
        'rfc' => ['required'],
        'fecha_nac' => ['required'],
        'departamento' => ['required'],
        'puesto' => ['required'],
        'correo' => ['required'],
        'numero_telefonico' => ['required'],
        'tipo' => ['required'],
        ]);

        $empleado ->update($validated);

        return redirect()->route('administracion.usuarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Administracion $administracion)
    {
        //
    }
}
