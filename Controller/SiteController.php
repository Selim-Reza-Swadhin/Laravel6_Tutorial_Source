<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // public function index(){
    //     //return 'SiteController';
    //     return view('homee.homee');
    // }

    // public function about(){
    //     //return 'SiteController';
    //     return view('homee.aboutt');
    // }


//compact with array
    public function index(){
        $name = 'Motaleb';
        $lname = 'Hossain';
        $age = 30;
        //return view('homee.homee', compact('name', 'lname', 'age'));

        // return view('homee.homee')
        // -> with('name', $name)
        // -> with('lname', $lname)
        // -> with('age', $age);

        // return view('homee.homee')
        // -> with('a', $name)
        // -> with('b', $lname)
        // -> with('c', $age);

        return view('homee.homee',
         [
            'x' =>$name,
             'y'=>$lname,
              'z'=>$age
          ]);
    }

    public function about(){
        //return 'SiteController';
        return view('homee.aboutt');
    }
}
