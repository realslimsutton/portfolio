<?php

namespace App\Http\Controllers;

class Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
}
