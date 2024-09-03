<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarritosController;
use App\Http\Controllers\AnillosController;
use App\Http\Controllers\ArosController;
use App\Http\Controllers\BrazaletesController;
use App\Http\Controllers\CollaresController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EstadoOrdenController;
use App\Http\Controllers\UsuariosController;

Route::get('/',[HomeController::class, 'index'])->name('home.index');

Route::get('/carrito',[CarritosController::class, 'index'])->name('carrito.index');

//Categorías
Route::get('/joyas/anillos',[AnillosController::class, 'index'])->name('anillos.index');
Route::get('/joyas/aros',[ArosController::class, 'index'])->name('aros.index');
Route::get('/joyas/brazaletes',[BrazaletesController::class, 'index'])->name('brazaletes.index');
Route::get('/joyas/collares',[CollaresController::class, 'index'])->name('collares.index');

//Productos
Route::get('/estado-orden',[EstadoOrdenController::class, 'index'])->name('estado-orden.index');

//Usuarios
Route::get('/iniciar-sesion',[UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/restaurar-contrasena',[UsuariosController::class, 'restaurarContrasena'])->name('usuarios.contrasena');
Route::get('/registrarse',[UsuariosController::class, 'registrarse'])->name('usuarios.registrarse');
Route::post('/iniciar-sesion/autenticar',[UsuariosController::class, 'autenticar'])->name('usuarios.autenticar');

//Administrador
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard.index')
->middleware(['auth', \App\Http\Middleware\CheckAdmin::class]);