<?php

namespace App\Http\Controllers;

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
        //
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
