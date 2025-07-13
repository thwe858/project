<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        return view('test');
    }
     public function about()
    {
        return view('mytest.about');
    }
     public function contact()
    {
        return view('test');
    }
}