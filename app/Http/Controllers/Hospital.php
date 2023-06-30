<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Hospital extends Controller
{
    public function datos (){
       $titulo="Hospital" ;
       return view('hospital',compact('titulo'));
    }
}
