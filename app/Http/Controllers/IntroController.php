<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function show(){
        $title='this is show page';
        $tdos=[
            'learn laravel',
            'learn vue',
            'learn Inertia',

        ];

        return view('title','show',compact('tdos'));
    }


    public function testfun(){
        return view('test.testui');
    }
}