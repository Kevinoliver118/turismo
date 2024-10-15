<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Ruta para la página de inicio (welcome)
Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::get('/paquetes', function () {return view('pages.paquetes'); })->name('paquetes');
Route::get('/reservaciones', function(){return view('pages.reservaciones');})->name('reservaciones');
Route::get('/que hacer', function(){return view('pages.que-hacer');})->name('que-hacer');
// Grupo de rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
