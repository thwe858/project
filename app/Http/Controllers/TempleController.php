<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempleController extends Controller
{
    public function index(){
        $todos=[
            [
                "title"=>'laravel',
                'body'=>'This is laravel'
            ],
             [
                "title"=>'Vue',
                'body'=>'This is Vue'
            ]
            , [
                "title"=>'React',
                'body'=>'This is React'
            ]
            ];
        return view('mytemplate.homepage',compact('todos'));
    }
    public function about(){
        return view('mytemplate.about');
    }
    public function post(){
        return view('mytemplate.post');
    }
    public function contact(){
        return view('mytemplate.contact');
    }
}