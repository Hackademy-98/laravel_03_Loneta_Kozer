<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        return view('home');
    }
}
    // }
    // public function (){
    //     return view("index.interno");
    // }
    // public function (){
    //     return view("index.esterno");
    // }
