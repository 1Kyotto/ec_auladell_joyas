<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactosController
{
    function index() 
    {
        return view('contacto.index');
    }
}
