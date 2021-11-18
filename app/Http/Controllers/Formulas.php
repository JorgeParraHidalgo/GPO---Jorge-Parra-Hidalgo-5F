<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formulas extends Controller
{
    function inicio(){
        return view("velocidad");
    }

    function calcula(Request $request){
        $v = $request->input('vel');
        $d = $request->input('dis');
        $t = $request->input('tim');

        if(!isset($v)){
            $r = $d / $t;
        } elseif(!isset($d)){
            $r = $v * $t;
        } elseif(!isset($t)){
            $r = $v / $d;
        }

        return view('resultado',["op"=>"velocidad",
        "res"=>$r]);
    }
}