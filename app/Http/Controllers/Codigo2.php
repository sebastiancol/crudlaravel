<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Codigo2 extends Controller
{
    public function matriz(){

        $titulo="mi programa";
        $matriz1=["casa","carro","bici"];
        $matriz2=[2,3,4,5];
        $matriz3=($matriz1+$matriz2);

        
        foreach ($matriz1 as $elemento1) {
            echo $elemento1;
        }

        foreach ($matriz2 as $elemento2) {
            echo $elemento2;
        }

        /*
        if ($elemento1 <=100 || $elemento2 <=200){
            return view('codigo');
        }*/
        
    return view('matriz', compact('elemento1','elemento2',/*'matriz3'*/));
    }
}
