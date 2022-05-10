<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutControlller extends Controller
{
    public function index()
    {
        return view('food.about');
    }
}
