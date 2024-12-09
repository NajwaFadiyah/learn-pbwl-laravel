<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaControl extends Controller
{
    //index
    function index()
    {
        return view('index');
    }
}
