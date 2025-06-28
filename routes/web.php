<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\productosController;

// Route::get('/', Function () {
//     return view('welcome');
// });
Route::get('/', IndexController::class);

/*

Route::controller,se usa para iniciar que las rutas que se encuentran dentro del grrupo seran procesadas por el mismo controlador ,esto para simplificar el manejo de rutas
*/
Route::controller
(productosController::class)->group(Function(){
    Route::get('/Productos',"index");
    Route::get('/Productos/crear',"creat");
    Route::get('Productos/{prod}',"show");
    Route::get('/',function(){
        return view('home');
    });
});
