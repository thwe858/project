<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControl extends Controller
{
    public function tablefun(){
        return view('backend.table');
    }
}