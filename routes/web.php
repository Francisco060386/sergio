<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\productosController;

// Route::get('/', Function () {
//     return view('welcome');
// });
Route::get('/', IndexController::class);

//------------ declaracion de rutas fijas ---------------
Route::get('/Productos',[productosController::class, "index"]);

//------------ declaracion con parametros ---------------
Route::get('Productos/crear', [productosController::class, "create"]);

Route::get('Productos/{product}',[productosController::class, "show"]);


//------------ declaracion de rutas fijas ---------------
Route::get('productos',function(){
    return "Seccion de productos";
});

//------------ declaracion con parametros -------------
Route::get('Productos/{id}', function ($id){
    return "Bienvenido $id";
});

Route::get('prueba_parametro/{id}', function($id){
    $d = $id;
    $nombre = explode("-",$d);
    return "tu nombre es $nombre[1]";
});
