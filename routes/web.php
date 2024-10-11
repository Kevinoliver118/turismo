<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Ruta para la página de inicio (welcome)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Ruta para la página de contacto
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

// Ruta para el dashboard, protegida por autenticación
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grupo de rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
