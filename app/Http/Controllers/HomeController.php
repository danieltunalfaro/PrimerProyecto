<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function empresa(){
        $datos["nombre"]="Daniel Tun";
        $datos["fecha"]="hoy";
        $datos["actividad"]="hola";
        $datos["descripcion_about"]="Daniel Tun";
        $datos["texto_ejemplo"]="ola";
        return view('empresa',$datos);
    }
    //
}
