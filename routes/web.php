<?php

use App\Models\Usuario;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TipoPropiedadController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermisoController;
use App\Models\Permission;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('agentes', AgenteController::class);
    Route::resource('tipos-propiedades', TipoPropiedadController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permisos', PermisoController::class);
});
