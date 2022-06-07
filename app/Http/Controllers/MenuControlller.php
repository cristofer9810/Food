<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Saucer;
use App\Models\Taste;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MenuControlller extends Controller
{

    public function index()
    {
        $saucers = Saucer::latest()->get();
        $tastes = Taste::all();
        return view('food.menu', compact('saucers', 'tastes'));
    }

    public function details()
    {

    }

    public function store(Request $request)
    {
        if ($request->small == 0 && $request->medium == 0 && $request->large == 0 ) {
            return back()->with('info', 'Por favor seleccione una cantidad');
        }

        if ($request->small < 0 || $request->medium < 0 || $request->large < 0 ) {
            return back()->with('info', 'Por favor no ingrese numeros negativos');
        }

       Order::create([
           'time' => $request->time,
           'date' => $request->date,
           'user_id' => auth()->user()->id,
           'saucer_id' => $request->saucer_id,
           'small' => $request->small,
           'medium' => $request->medium,
           'large' => $request->large,
           'body' => $request->body,
           'phone' => $request->phone
       ]);

       return back()->with('info', 'Tu orden esta en proceso, por favor verifica su estado en la bandeja');

    }

    public function show($id)
    {
        $date = Carbon::now();
        $saucer = Saucer::find($id);

        return view('food.menu-details', compact('saucer', 'date'));
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
