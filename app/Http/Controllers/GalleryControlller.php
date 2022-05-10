<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryControlller extends Controller
{
    public function index()
    {
        return view('food.gallery');
    }
}
