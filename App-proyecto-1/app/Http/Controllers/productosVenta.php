<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosVenta extends Controller
{
    //3
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function indexProducto()
    {
        return view('page2');
    }
}
