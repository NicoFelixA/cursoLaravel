<?php

<<<<<<< HEAD
use App\Http\Controller\AlumnoController;
=======
use App\Http\Controllers\AlumnoController;
>>>>>>> 2ee836460afb14144f06cb5f3cf25a187ff1429c
use App\Http\Controllers\bienvenidoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/bienvenido', [bienvenidoController::class, 'bienvenido']);

route::get('/inicio', [bienvenidoController::class, 'inicio']);

route::get('/alumnos', [AlumnoController::class, 'alumnos']);
<<<<<<< HEAD
=======


>>>>>>> 2ee836460afb14144f06cb5f3cf25a187ff1429c
