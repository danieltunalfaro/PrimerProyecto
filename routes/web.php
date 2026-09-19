<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('vista_inicio');

Route::get('/principal',function(){
    $datos=[
        "titulo"=>"Tienda Virtual - Vista Principal", 
        "mensaje"=>"Bienvenido a la vista principal", 
        "Autor"=>"Daniel"];
return view('principal',$datos);
})->name('principal');

Route::get('/mensaje/{id}', function($id){
    return "Mostrando el mensaje: {$id}";
})-> where('id','[0-9]+');

Route::get('/contact', function(){
    $nombre="Daniel Tun";
    return view('contact',['nombre'=>$nombre, 'carrera'=>'Ingenieria en Sistemas']);
})->name('contact');

Route::get('/empresa',[HomeController::class,'empresa'])->name('empresa');

