<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('inicio');
    }

    public function amigos(){
        return view('amigos');
    }

    public function principales(){
        return view('principales');
    }

    public function secundarios(){
        return view('secundarios');
    }

    public function villanos(){
        return view('villanos');
    }
}
