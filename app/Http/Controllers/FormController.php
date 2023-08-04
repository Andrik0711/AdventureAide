<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        // Mostrar la vista
        return view('formViaje');
    }
}
