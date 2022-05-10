<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StuffControlller extends Controller
{
    public function index()
    {
        return view('food.stuff');
    }
}
