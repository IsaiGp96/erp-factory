<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Fabrica;

class FabricaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('fabrica.main', [
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
        // Recibe los datos del formulario
        $data = $request->validate([
            'id' => 'required',
            'piel' => 'required',
            'horma' => 'required',
            'suela' => 'required',
            'tubo' => 'required',
            'fecha' => 'required|date',
        ]);

        // Crea una nueva instancia de Venta con los datos recibidos
        $fabrica = Fabrica::create($data);

        // Redirige a la vista de ventas
        return redirect()->route('fabrica.main');
    }


    /**
     * Display the specified resource.
     */
    public function show(Fabrica $fabricas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $fabricas)
    {

        $fabricas = Empleados::findOrFail($fabricas);
        return view('fabrica.editar',[
            'usuario' => $fabricas
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
        'fecha' => ['required'],
        ]);

        $empleado ->update($validated);

        return redirect()->route('fabrica.main');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fabrica $fabricas)
    {
        //
    }
}
