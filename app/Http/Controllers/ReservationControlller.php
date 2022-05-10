<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationControlller extends Controller
{
    public function index()
    {
        return view('food.reservation');
    }
}
