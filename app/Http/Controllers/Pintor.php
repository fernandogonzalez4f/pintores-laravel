<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pintor extends Controller
{
    public function index(){
        return view('plantilla');
    }

    public function vincent(){
        return view('vincentvangogh');
    }

    public function rembrandt(){
        return view('rembrandtvanrijn');
    }

    public function leonardo(){
        return view('leonardodavinci');
    }

    public function claude(){
        return view('claudemonet');
    }

    public function paul(){
        return view('paulcezanne');
    }
}
