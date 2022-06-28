<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $orders = Order::latest()->where('user_id', auth()->user()->id)->get();

        return view('dashboard', compact('orders'));
    }
}
