<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaucerRequest;
use App\Models\Category;
use App\Models\Saucer;
use App\Models\Taste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class SaucerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.saucers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tastes = Taste::pluck('name', 'id');

        return view('admin.saucers.create', compact('tastes'));
    }


    public function store(SaucerRequest $request)
    {
        $saucer =  Saucer::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put('public/posts', $request->file('file'));

            $saucer->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('admin.saucers.edit', $saucer)->with('info', 'El platillo se guardo con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Saucer $saucer)
    {

        $tastes = Taste::pluck('name', 'id');

        return view('admin.saucers.edit', compact('saucer', 'tastes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaucerRequest $request,Saucer  $saucer)
    {
        $saucer->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('public/posts', $request->file('file'));

            if ($saucer->image) {
                Storage::delete($saucer->image->url);

                $saucer->image->update([
                    'url' => $url
                ]);
            } else {
                $saucer->image()->create([
                    'url' => $url
                ]);
            }
        }

        if ($request->tags) {
            $saucer->tags()->sync($request->tags);
        }

        Cache::flush();

        return redirect()->route('admin.saucers.edit', $saucer)->with('info', 'El platillo se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saucer $saucer)
    {
        $saucer->delete();
        Cache::flush();
        return redirect()->route('admin.saucers.index', $saucer)->with('info', 'El platillo se elimino con exito');
    }
}
