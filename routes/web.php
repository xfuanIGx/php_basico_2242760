<?php

use Illuminate\Support\Facades\Route;

use function Symfony\Component\String\s;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//callback; funcion sin nombre que hace parte de de
//los parametros de la innovacion dentro de otra
Route::get("variables", function () {

    echo "<center><H1> Bienvenidos </H1></center>";
    echo "<hr>";
    $mensaje2 = "<center><p>.</p></center>";
    echo $mensaje2;


    //$mensaje = 10;
    //var_dump($mensaje);

});


Route::get("Arreglos", function () {
    //estructura de datos
    // => arreglos asociativo
    $estudiantes = [" AN " => "Ana", " MA " => "Maria", " JU " => "Juan"];
    echo "<pre>";
    print_r($estudiantes);
    echo "</pre>";
});