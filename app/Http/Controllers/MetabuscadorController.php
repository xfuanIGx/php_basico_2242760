<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //accion para mopstrar el formulario de busqueda
    public function Formulario_buscador(){
        //mostrar la vista del metabuscador
        return view ('metabuscador');
    }

    public function Buscar(){
        //datos llegan al arreglo $_POST
        $termino = $_POST["termino"];
        $motor = $_POST["motores"];
        // redireccionamiento
        switch($motor){
            case 1: return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2: return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3: return redirect()->to("https://www.baidu.com/s?ie=utf-8&f=3&rsv_bp=1&rsv_idx=1&tn=baidu&wd=$termino");
                break;
            case 4: return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
            case 5: return redirect()->to("https://yandex.com/search/?text=$termino");
                break;
            case 6: return redirect()->to("https://www.ask.com/web?q=$termino");
                break;
            case 7: return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                break;
            case 8: return redirect()->to("https://translate.google.com/?sl=es&tl=en&text=$termino");
                break;
            case 9: return redirect()->to("https://www.facebook.com/search/top/?q=$termino");
                break;
            case 10: return redirect()->to("https://mx.depositphotos.com/stock-photos/$termino");
                break;
        }
    }

}

