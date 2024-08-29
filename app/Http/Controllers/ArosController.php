<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArosController
{
    function index() 
    {
        return view('aros.index');
    }
}
