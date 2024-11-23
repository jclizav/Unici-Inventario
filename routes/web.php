<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\SourvenirsController;
use App\Http\Controllers\PapeleriaInsumosController;
use App\Http\Controllers\InventarioActivosController;
use Illuminate\Support\Facades\Route;

// Ruta para el dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Rutas para departamentos
Route::prefix('departamento')->group(function () {
    Route::get('/', [DepartamentoController::class, 'index'])->name('departamento.index'); // Mostrar departamentos
    Route::post('/', [DepartamentoController::class, 'store'])->name('departamento.store'); // Crear un nuevo departamento
    Route::delete('/{id}', [DepartamentoController::class, 'destroy'])->name('departamento.destroy'); // Eliminar un departamento
});

// Rutas para otras secciones
Route::get('/responsable', [ResponsableController::class, 'index'])->name('responsable');
Route::get('/inventario', [InventarioController::class, 'index'])->name('inventario');
Route::get('/reportes', [ReportesController::class, 'index'])->name('reportes');
Route::get('/sourvenirs', [SourvenirsController::class, 'index'])->name('sourvenirs');
Route::get('/papeleriainsumos', [PapeleriaInsumosController::class, 'index'])->name('papeleriainsumos');
Route::get('/inventarioactivos', [InventarioActivosController::class, 'index'])->name('inventarioactivos');

// Ruta principal (Welcome)
Route::get('/', function () {
    return view('welcome');
});

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
