<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * index muestra todas tas tareas
     * store guardar tareas
     * update actualizae tareas
     * destroy eliminar tarea
     * edit muestra formulario de edición de tarea
     * 
     */
    public function index(){
        //method, show show pokemones
        $listaPokemon = Http::get('https://pokeapi.co/api/v2/pokemon/?limit=52');
        $pokemonesArray = $listaPokemon->json();
       // dd($pokemonesArray['results']);

        return view('home', ['pokemones' => $pokemonesArray] );
    }
}
