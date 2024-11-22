<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\SourvenirsController;
use App\Http\Controllers\PapeleriaInsumosController;
use App\Http\Controllers\InventarioActivosController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/departamento', [DepartamentoController::class, 'index'])->name('departamento');
Route::get('/responsable', [ResponsableController::class, 'index'])->name('responsable');
Route::get('/inventario', [InventarioController::class, 'index'])->name('inventario');
Route::get('/reportes', [ReportesController::class, 'index'])->name('reportes');
Route::get('/sourvenirs', [SourvenirsController::class, 'index'])->name('sourvenirs');
Route::get('/papeleriainsumos', [PapeleriaInsumosController::class, 'index'])->name('papeleriainsumos');
Route::get('/inventarioactivos', [InventarioActivosController::class, 'index'])->name('inventarioactivos');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
