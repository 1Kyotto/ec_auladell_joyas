<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadoOrdenController
{
    function index() 
    {
        return view('estado-orden.index');
    }
}
