<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function menu(){
        return view('menu');
    }

    public function contact(){
        return view('menu');
    }
}
