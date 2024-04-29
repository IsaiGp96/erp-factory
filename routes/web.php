<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdministracionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('inicio');



Route::get('/administracion',[AdministracionController::class, 'index'])->name('administracion.registroUsuarios');
Route::post('/administracion',[AdministracionController::class, 'store'])->name('administracion.store');
Route::get('/administracion/{usuario}/editar', [AdministracionController::class,'edit'])->name('administracion.editar');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
