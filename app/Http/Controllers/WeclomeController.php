<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeclomeController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
}
