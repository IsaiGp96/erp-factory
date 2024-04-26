<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Empleados;
use Illuminate\Support\Carbon;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/administracion', function(){
    return view('/administracion');
});

Route::post('/administracion', function(){
    
    $nombre = request('nombre');
    $apellidos = request('apellidos');
    $curp = request('curp');
    $rfc = request('rfc');
    $fecha_nac = request('fecha_nac');
    $departamento = request('departamento');
    $puesto = request('puesto');
    $correo = request('correo');
    $numero_telefonico = request('numero_telefonico');
    $tipo = request('tipo');
    

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
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
