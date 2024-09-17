<?php

namespace App\Http\Controllers;

use App\Mail\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationControlller extends Controller
{
    public function index()
    {
        return view('food.reservation');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'name_last' => 'required',
            'person' => 'required',
            'date1' => 'required',
            'time1' => 'required',
        ]);


        $correo = new Reservation($request->all());
        Mail::to('crispromax00@gmail.com')->send($correo);

        return redirect()->route('food.reservation')->with('info', 'Reserva realizada, espere hasta que el restaurante se cominqué con ustedes por correo');
    }
}
