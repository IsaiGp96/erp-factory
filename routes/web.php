<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdministracionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentasController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('inicio');


//------------------- USUARIOS ------------------------------------------------------------------------------------------------------------
//Ruta de listado usuarios
Route::get('/administracion',[AdministracionController::class, 'index'])->name('administracion.usuarios');

//Ruta para cargar solamente la vista de registroUsuarios
Route::get('/administracion/registroUsuarios', function() {
    return view('/administracion.registroUsuarios');
})->name('administracion.registroUsuarios');

//Ruta post para registroUsuario
Route::post('/administracion/registroUsuarios',[AdministracionController::class, 'store'])->name('administracion.store');

//Ruta cargar la vista de edicion con el metodo edit para obtener el id del usuario y pasarlo como parametro
Route::get('/administracion/{usuario}/editarUsuarios', [AdministracionController::class,'edit'])->name('administracion.editarUsuarios');

//Ruta con metodo update para conectar a la base de datos y realizar la actualizacion
Route::put('/administracion/usuarios/{usuario}',[AdministracionController::class, 'update'])->name('administracion.update');

//------------------- END USUARIOS ------------------------------------------------------------------------------------------------------------


//------------------- VENTAS -------------------------------------------------------------------------------------------------------------------

//Ruta de ventas
Route::get('/ventas',[VentasController::class, 'index'])->name('ventas.ventas');

//Ruta post para registroVenta
Route::post('/ventas', [VentasController::class, 'store']) ->name('ventas.store');

//Ruta cargar la vista de edicion con el metodo edit para obtener el id del usuario y pasarlo como parametro
Route::get('/ventas/{venta}', [VentasController::class,'edit'])->name('ventas.editarVenta');

Route::get('/registroOrden',[VentasController::class, 'index'])->name('ventas.registro');

//------------------- END VENTAS ------------------------------------------------------------------------------------------------------------






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
