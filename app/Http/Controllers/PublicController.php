<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function Bio(){
        return view('Bio');
    }

    
    public function WebDeveloper(){
        return view('WebDeveloper');
    }

    
    public function GraficDesign(){
        return view('GraficDesign');
    }
}
