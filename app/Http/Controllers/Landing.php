<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landing extends Controller
{
    public function index(){
        return view('landing.landing', ['pagename' => 'Homepage']);
    }

    public function projects(){
        return view('landing.project', ['pagename' => 'Our Work']);
    }
}
