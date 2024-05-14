<?php

use App\Livewire\CrearMascota;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PersonaToCliente;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('layouts.welcome');
});

Route::get('LayoutsPrincipal/Mascotas/index', [MascotaController::class, 'index'])->middleware(['auth', 'verified'])
            ->name('LayoutsPrincipal.Mascotas.index');
Route::get('LayoutsPrincipal/Mascotas/create', [MascotaController::class, 'create'])->middleware(['auth', 'verified'])
            ->name('LayoutsPrincipal.Mascotas.create');
Route::get('LayoutsPrincipal/Mascotas/{mascota}/edit', [MascotaController::class, 'edit'])->middleware(['auth', 'verified'])
            ->name('LayoutsPrincipal.Mascotas.edit');

//? Manejo de controlador Cliente
Route::get('LayoutsPrincipal/Clientes/index', [ClienteController::class, 'index'])->middleware(['auth', 'verified'])
            ->name('LayoutsPrincipal.Clientes.index');
Route::get('LayoutsPrincipal/Clientes/create', [ClienteController::class, 'create'])->middleware(['auth', 'verified'])
            ->name('LayoutsPrincipal.Clientes.create');
Route::get('LayoutsPrincipal/{cliente}/Clientes/edit', [ClienteController::class, 'edit'])->middleware(['auth', 'verified'])
            ->name('LayoutsPrincipal.Clientes.edit');


//? Manejo de controlador Persona
Route::get('LayoutsPrincipal/Personas/index', [PersonaController::class, 'index'])->middleware(['auth', 'verified'])
            ->name('LayoutsPrincipal.Personas.index');

Route::get('LayoutsPrincipal/Personas/create', [PersonaController::class, 'create'])->middleware(['auth', 'verified'])
            ->name('LayoutsPrincipal.Personas.create');

Route::get('LayoutsPrincipal/{persona}/Personas/edit', [PersonaController::class, 'edit'])->middleware(['auth', 'verified'])
            ->name('LayoutsPrincipal.Personas.edit');

//? Manejo del controlador PersonaToCliente
Route::get('LayoutsPrincipal/PersonaToCliente/index', [PersonaToCliente::class, 'index'])->middleware(['auth', 'verified'])
            ->name('LayoutsPrincipal.PersonaToCliente.index');

Route::get('LayoutsPrincipal/PersonaToCliente/create', [PersonaToCliente::class, 'create'])->middleware(['auth', 'verified'])
            ->name('LayoutsPrincipal.PersonaToCliente.create');

Route::get('LayoutsPrincipal/{clientesAsociado}/PersonaToCliente/edit', [PersonaToCliente::class, 'edit'])->middleware(['auth', 'verified'])
            ->name('LayoutsPrincipal.PersonaToCliente.edit');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::get('livewire.crear-mascota',[CrearMascota::class, 'render'])->name('mascota');
// Route::post('livewire.crear-mascota',[CrearMascota::class, 'render']);
