<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SATController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\SourvenirsController;
use App\Http\Controllers\PapeleriaInsumosController;
use App\Http\Controllers\InventarioActivosController;
use Illuminate\Support\Facades\Route;

// Ruta para el dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Rutas para departamentos
Route::prefix('General')->group(function () {
    Route::get('/', [GeneralController::class, 'index'])->name('General.index'); // Mostrar Generals
    Route::post('/', [GeneralController::class, 'store'])->name('General.store'); // Crear un nuevo General
    Route::delete('/{id}', [GeneralController::class, 'destroy'])->name('General.destroy'); // Eliminar un General
});

// Rutas para otras secciones
Route::get('/SAT', [SATController::class, 'index'])->name('responsable');
Route::put('/añadirDato',[GeneralController::class, 'create'])->name('createN');
Route::get('/actualizarDato/{id}',[GeneralController::class, 'edit'])->name('editN');
Route::put('/actualizarDato/{id}',[GeneralController::class, 'editUP'])->name('editN.up');
Route::put('/eliminarDato/{id}',[GeneralController::class, 'delite'])->name('eliminarN');
Route::get('/descarga/{filename}',[GeneralController::class, 'Descarga'])->name('Descarga');
Route::get('/inventario', [InventarioController::class, 'index'])->name('inventario');
Route::get('/reportes', [ReportesController::class, 'index'])->name('reportes');
Route::get('/sourvenirs', [SourvenirsController::class, 'index'])->name('sourvenirs');
Route::get('/papeleriainsumos', [PapeleriaInsumosController::class, 'index'])->name('papeleriainsumos');
Route::get('/inventarioactivos', [InventarioActivosController::class, 'index'])->name('inventarioactivos');

// Ruta principal (Welcome)
// Route::get('/', function () {
//     return view('welcome');
// });

// Ruta adicional del dashboard (solo para usuarios autenticados)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas con middleware de autenticación
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Archivo de rutas de autenticación
require __DIR__.'/auth.php';
