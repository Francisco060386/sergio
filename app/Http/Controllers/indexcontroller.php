<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexcontroller
{
    public function __invoke(){
        return "Index";
    }        
}