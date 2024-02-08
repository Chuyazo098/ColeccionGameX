<?php

namespace App\Http\Controllers;
use App\Models\juegos;

use Illuminate\Http\Request;

class GeneradorController extends Controller
{
    public function imprimir(){
        $todosloscampos = juegos::all();
        $pdf = \PDF::loadView('ejemplo', ['todosloscampos' => $todosloscampos] );
        return $pdf->download('ejemplo.pdf');
   }
   
}
