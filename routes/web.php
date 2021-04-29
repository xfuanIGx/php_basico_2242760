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


Route::get( 'paises' , function(){
 $paises = [

    "COLOMBIA" => [

        "Capital" => "Bogota",
        "Moneda" => "Pesos",
        "Poblacion" => 50.34
    ],

    "PERU" => [

        "Capital" => "Lima",
        "Moneda" => "sol",
        "Poblacion" => 32.51

    ],

    "Paraguay" => [

        "Capital" => "Asuncion",
        "Moneda" => "Guarani",
        "Poblacion" => 7.2

    ]

    ];

foreach($paises as $nombrepais => $pais){

    echo "<h1>$nombrepais</h1>";
    echo"<pre>";
    print_r($pais["Moneda"]);
    echo "<br>";
    print_r($pais["Poblacion"]);
    echo"</pre>";
    echo "<hr />";

}

});






