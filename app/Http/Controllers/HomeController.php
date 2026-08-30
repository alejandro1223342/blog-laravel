<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Solo usar cuando hay un controlador con un solo metodo
    public function __invoke(){
         return view('welcome');
    }
}
