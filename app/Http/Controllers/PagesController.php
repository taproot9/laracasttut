<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function about(){

//        $names = [];
       $names=[
           'Ryan',
           'Jade',
           'Grace'
       ];
        return view('pages.about', compact('names'));
    }

    public function contact(){
         return view('pages.contact');
    }
}
