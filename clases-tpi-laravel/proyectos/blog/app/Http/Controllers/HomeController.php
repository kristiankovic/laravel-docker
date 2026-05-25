<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        return view('pages.inicio');
    }

    public function dataEnviada(){
        
        return view('pages.form');
    }

    public function dataRecibida(Request $request){

        return view('pages.show', [
            'nombre' => $request->nombre,
            'edad'   => $request->edad
        ]);
    }
}
