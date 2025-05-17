<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//------------ declaracion de ruta fijas -------------
Route::get('/Productos',function(){
    return "Seccion de productos";
});

//----------- declaracion con parametros --------------
Route::get('Productos/{id}', function ($id){
    return "Bienvenido $id";
});

Route::get('prueba_parametros/{id}/{id2}', function($id,$id2){
    $d= $id;
    $nombre = explode("-",$d);
    return "tu nombre es $nombre[1] $id2";
});
