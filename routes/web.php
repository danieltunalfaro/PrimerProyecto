<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('vista_inicio');

Route::get('/principal',function(){
$datos=["titulo"=>"Tienda Virtual - Vista Principal", "mensaje"=>"Bienvenido a la vista principal", "Autor"=>"Daniel"];
return view('principal',$datos);
})->name('principal');