<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('food.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'message' => 'required',
        ]);


        $correo = new ContactMailable($request->all());
        Mail::to('crispromax00@gmail.com')->send($correo);

        return redirect()->route('food.contact')->with('info', 'informacion enviada, espere hasta que el restaurante se cominqué con ustedes por correo');
    }
}
