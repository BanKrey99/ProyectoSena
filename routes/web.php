<?php

use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\TipoInmuebleController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Rutas de municipios
Route::get('/municipio/index', [MunicipioController::class, 'index'])->name('municipios.index');
Route::get('/municipio/create', [MunicipioController::class, 'create'])->name('municipios.create');
Route::post('/municipio/store', [MunicipioController::class, 'store'])->name('municipios.store');
Route::get('/municipio/edit/{id}', [MunicipioController::class, 'edit'])->name('municipios.edit');
Route::post('/municipio/update/{id}', [MunicipioController::class, 'update'])->name('municipios.update');
Route::post('/municipio/destroy/{id}', [MunicipioController::class, 'destroy'])->name('municipios.destroy');

//Rutas de Tipo de Inmueble 
Route::get('/tipoInmueble/index', [TipoInmuebleController::class, 'index'])->name('tipoInmueble.index');
Route::get('/tipoInmueble/create', [TipoInmuebleController::class, 'create'])->name('tipoInmueble.create');
Route::post('/tipoInmueble/store', [TipoInmuebleController::class, 'store'])->name('tipoInmueble.store');
Route::get('/tipoInmueble/edit/{id}', [TipoInmuebleController::class, 'edit'])->name('tipoInmueble.edit');
Route::post('/tipoInmueble/update/{id}', [TipoInmuebleController::class, 'update'])->name('tipoInmueble.update');
Route::post('/tipoInmueble/destroy/{id}', [TipoInmuebleController::class, 'destroy'])->name('tipoInmueble.destroy');

//Rutas de Usuarios 
Route::get('/usuario/index', [UsuarioController::class, 'index'])->name('usuario.index');
Route::get('/usuario/create', [UsuarioController::class, 'create'])->name('usuario.create');
Route::post('/usuario/store', [UsuarioController::class, 'store'])->name('usuario.store');
Route::get('/usuario/edit/{id}', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::post('/usuario/update/{id}', [UsuarioController::class, 'update'])->name('usuario.update');
Route::post('/usuario/destroy/{id}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');