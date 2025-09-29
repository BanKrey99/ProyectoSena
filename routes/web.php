<?php

use App\Http\Controllers\MunicipioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/municipio/index', [MunicipioController::class, 'index'])->name('municipios.index');
Route::get('/municipio/create', [MunicipioController::class, 'create'])->name('municipios.create');
Route::post('/municipio/store', [MunicipioController::class, 'store'])->name('municipios.store');
Route::get('/municipio/edit/{id}', [MunicipioController::class, 'edit'])->name('municipios.edit');
Route::post('/municipio/update/{id}', [MunicipioController::class, 'update'])->name('municipios.update');
Route::post('/municipio/destroy/{id}', [MunicipioController::class, 'destroy'])->name('municipios.destroy');