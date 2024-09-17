<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\View;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $views = View::where('status', 2)->get();//->latest('id');

        return view('welcome', compact('views'));
    }
}
