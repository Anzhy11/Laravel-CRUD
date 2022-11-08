<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    
    //index method
    public function index()
    {
        return view('welcome');
    }

}
