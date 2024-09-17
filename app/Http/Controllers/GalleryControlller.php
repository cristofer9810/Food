<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\View;


class GalleryControlller extends Controller
{
    public function index()
    {

        $views = View::where('status', 2)->get();

        return view('food.gallery', compact('views'));
    }

    public function indexx()
    {
        $views = View::where('status', 2)->get();//->latest('id');

        return view('welcome', compact('views'));
    }
}
