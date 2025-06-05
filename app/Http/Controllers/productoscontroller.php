<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productoscontroller extends Controller
{
    //cuando se indica que es una pagina principal el metodo se debe 
    public function index(){
        return view("productos");
    }

    // cuando se trata de llamar a un formulario para creae un registro
    public function create(){
        return "Carrito activo";
    }

    public function show($product){
        return "El producto es $product";
    }
}
