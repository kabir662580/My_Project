<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexView()
    {
        return view('users.index');
    }

    public function index()
    {
        return view('users.deneme');
    }
     public function kabirou()
     {
         return view('users.kabirou');
    }
    public function layout()
    {
        return view('personne.layout');
    }

}
