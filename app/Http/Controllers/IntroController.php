<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function show(){
        return view('show');
    }
    public function about(){
        return view('about');
    }
    public function contant(){
        return view('contant');
    }
}