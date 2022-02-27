<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteControllerTemplate extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    } 

    public function aboutus(){
        return view('aboutus');
    }

     public function aboutstar(){
        return view('aboutstar');
    }

    public function service(){
        return view('service');
    }

    public function contact(){
        return view('contact');
    }
}
