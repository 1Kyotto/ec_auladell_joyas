<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarritosController;
use App\Http\Controllers\AnillosController;
use App\Http\Controllers\UsuariosController;
 

Route::get('/',[HomeController::class, 'index'])->name('home.index');

Route::get('/carrito',[CarritosController::class, 'index'])->name('carrito.index');

Route::get('/joyas/anillos',[AnillosController::class, 'index'])->name('anillos.index');

//Usuarios
Route::get('/iniciar-sesion',[UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/restaurar-contrasena',[UsuariosController::class, 'restaurarContrasena'])->name('usuarios.contrasena');
Route::get('/registrarse',[UsuariosController::class, 'registrarse'])->name('usuarios.registrarse');

