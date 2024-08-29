<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrazaletesController
{
    function index() 
    {
        return view('brazaletes.index');
    }
}
