<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trackController extends Controller
{
    public  function index()
    {
        return view('track');
    }
}
