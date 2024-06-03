<?php

use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

//Ruta principal -> index de la página.
route::get('/', [indexController::Class, 'index']) -> name('inicio');
