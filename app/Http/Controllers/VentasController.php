<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\OrdenesTrabajo;

class  VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('ventas.ventas', [
            'ordenesTrabajo' => OrdenesTrabajo::all()
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

        OrdenesTrabajo::create([
            'id' => $request->get('id'),
            'piel' => $request->get('piel'),
            'horma' => $request->get('horma'),
            'suela' => $request->get('suela'),
            'tubo' => $request->get('tubo'),
            'abono' => $request->get('abono'),
            'precio' => $request->get('precio'),
            'anticipo' => $request->get('anticipo'),
            'tipo_venta' => $request->get('tipo_venta'),
            'nombre' => $request->get('nombre'),
            'apellidos' => $request->get('apellidos'),
            'correo' => $request->get('correo'),
            'numero_telefonico' => $request->get('numero_telefonico'),
            'tipo' => $request->get('tipo'),
            'fecha' => $request->get('fecha'),
        ]);

        // Recibe los datos del formulario
        $request->validate([
            'id' => 'required',
            'piel' => 'required',
            'horma' => 'required',
            'suela' => 'required',
            'tubo' => 'required',
            'abono' => 'required',
            'precio' => 'required',
            'anticipo' => 'required',
            'tipo_venta' => 'required',
            'nombre' => 'required',
            'apellidos' => 'required',
            'correo' => 'required|email',
            'numero_telefonico' => 'required',
            'tipo' => 'required',
            'fecha' => 'required|date',
        ]);



        // Redirige a la vista de ventas
        return redirect()->route('ventas.ventas');
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
    public function edit($ventas)
    {

        $ventas = OrdenesTrabajo::findOrFail($ventas);
        return view('ventas.editarVenta', [
            'venta' => $ventas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $venta)
    {
        $datosVenta  = OrdenesTrabajo::findOrFail($venta);

        
        $datosVenta -> id =  $request->id;
        $datosVenta -> piel =  $request->piel;
        $datosVenta -> horma =  $request->horma;
        $datosVenta -> suela =  $request->suela;
        $datosVenta -> tubo =  $request->tubo;
        $datosVenta -> abono =  $request->abono;
        $datosVenta -> precio =  $request->precio;
        $datosVenta -> anticipo =  $request->anticipo;
        $datosVenta -> tipo_venta =  $request->tipo_venta;
        $datosVenta -> nombre =  $request->nombre;
        $datosVenta -> apellidos =  $request->apellidos;
        $datosVenta -> correo =  $request->correo;
        $datosVenta -> numero_telefonico =  $request->numero_telefonico;
        $datosVenta -> tipo =  $request->tipo;
        $datosVenta -> fecha =  $request->fecha;

        $datosVenta->save();

        return redirect()->route('ventas.ventas');

        // $validated = $request->validate([
        // 'id' => ['required'],
        // 'piel' => ['required'],
        // 'horma' => ['required'],
        // 'suela' => ['required'],
        // 'tubo' => ['required'],
        // 'abono' => ['required'],
        // 'precio' => ['required'],
        // 'anticipo' => ['required'],
        // 'tipo_venta' => ['required'],
        // 'nombre' => ['required'],
        // 'apellidos' => ['required'],
        // 'correo' => ['required'],
        // 'numero_telefonico' => ['required'],
        // 'tipo' => ['required'],
        // 'fecha' => ['required'],
        // ]);

        // $empleado ->update($validated);

        // return redirect()->route('ventas.ventas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $ventas)
    {
        //
    }
}
