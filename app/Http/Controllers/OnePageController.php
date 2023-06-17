<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnePageController extends Controller
{
    public function irALugarEspecifico(){
        return view('welcome')->with('scrollTo', 'aboutUs');
    }

}
