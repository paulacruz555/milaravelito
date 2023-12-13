<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/', [PagesController::class, 'fnIndex'])->name('xInicio');


Route::post('/registrar', [PagesController::class, 'fnRegistrar'])->name('Estudiante.xRegistrar');
Route::post('/registrarSeg', [PagesController::class, 'fnRegistrarSeg'])->name('Estudiante.xRegistrarSeguimiento');


Route::get('/lista', [PagesController::class, 'fnLista'])->name('xLista');
Route::get('/detalle/{id}', [PagesController::class, 'fnEstDetalle'])->name('Estudiante.xDetalle');

Route::get('/seguimiento', [PagesController::class, 'fnSeguimiento'])->name('xListaSeguimiento');
Route::get('/detalleseg/{id}', [PagesController::class, 'fnEstDetalleSeg'])->name('Estudiante.xDetalleSeg');


Route::get('/actualizar/{id}', [PagesController::class, 'fnEstActualizar'])->name('Estudiante.xActualizar');
Route::put('/actualizar/{id}', [PagesController::class, 'fnUpdate'])->name('Estudiante.xUpdate');

Route::get('/actualizarseg/{id}', [PagesController::class, 'fnEstActualizarSeg'])->name('Estudiante.xActualizarSeg');
Route::put('/actualizarseg/{id}', [PagesController::class, 'fnUpdateSeg'])->name('Estudiante.xUpdateSeg');


Route::delete('/eliminar/{id}', [PagesController::class, 'fnEliminar'])->name('Estudiante.xEliminar');
Route::delete('/eliminarseg/{id}', [PagesController::class, 'fnEliminarSeg'])->name('Estudiante.xEliminarSeg');


Route::get('/galeria/{numero?}', [PagesController::class, 'fnGaleria'])->where('numero', '[0-9]+')->name('xGaleria');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


