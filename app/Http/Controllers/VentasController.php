<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Venta;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('ventas.ventas', [
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
    $id = $request->get('id');
    $piel = $request->get('piel');
    $horma = $request->get('horma');
    $suela = $request->get('suela');
    $tubo = $request->get('tubo');
    $abono = $request->get('abono');
    $precio = $request->get('precio');
    $anticipo = $request->get('anticipo');
    $tipo_venta = $request->get('tipo_venta');
    $nombre = $request->get('nombre');
    $apellidos = $request->get('apellidos');
    $correo = $request->get('correo');
    $numero_telefonico = $request->get('numero_telefonico');
    $tipo = $request->get('tipo');
    $fecha = $request->get('fecha');

    //INSERT INTO DATABASE
    Empleados::create([
        'id' => $id,
        'piel' => $piel,
        'horma'=> $horma,
        'suela' => $suela,
        'tubo' => $tubo,
        'abono' => $abono,
        'precio' => $precio,
        'anticipo' => $anticipo,
        'tipo_venta'=> $tipo_venta,
        'nombre' => $nombre,
        'apellidos' => $apellidos,
        'correo' => $correo,
        'numero_telefonico' => $numero_telefonico,
        'tipo' => $tipo,
        'fecha'=> $fecha
    ]);

    return to_route('ventas.ventas');

    }

    /**
     * Display the specified resource.
     */
    public function show(Venta $ventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $ventas)
    {

        $ventas = Empleados::findOrFail($ventas);
        return view('ventas.abonar',[
            'usuario' => $ventas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $usuario)
    {
        $empleado  = Empleados::findOrFail($usuario);
        $validated = $request->validate([
        'id' => ['required'],
        'piel' => ['required'],
        'horma' => ['required'],
        'suela' => ['required'],
        'tubo' => ['required'],
        'abono' => ['required'],
        'precio' => ['required'],
        'anticipo' => ['required'],
        'tipo_venta' => ['required'],
        'nombre' => ['required'],
        'apellidos' => ['required'],
        'correo' => ['required'],
        'numero_telefonico' => ['required'],
        'tipo' => ['required'],
        'fecha' => ['required'],
        ]);

        $empleado ->update($validated);

        return redirect()->route('ventas.ventas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $ventas)
    {
        //
    }
}
