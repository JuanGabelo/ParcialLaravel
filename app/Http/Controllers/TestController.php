<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    function welcome(Request $request) {
        Log::info("Bienvenido al log de Laravel");
        Log::info(print_r($request->all(), 1) );
        return view('welcome');
    }

    function testView (Request $request) {
        $titulo = $request->query('titulo', 'Valor por defecto');
        return view('test', [
            'title' => $titulo,
            'books' => [
                'El señor de los anillos',
                'Harry Potter',
                'Los pilares de la tierra'
            ],
            'countries' => [
                'España' => ['Madrid', 'Barcelona', 'Valencia'],
                'Francia' => ['Paris', 'Lyon', 'Marsella'],
                'Italia' => ['Roma', 'Milan', 'Venecia']
            ]
        ]);
    }
}
