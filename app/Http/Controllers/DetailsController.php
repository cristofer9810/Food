<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index()
    {
        return view('food.category');
    }

    public function category(Category $category)
    {
         //el metodo carbon se utiliza para darle estilos a nuestras fechas como dia, mes y año o año, mes y dia
         $date = Carbon::now();
         //pasamos esta variable date a la vista con el metodo compact

         $author = Post::whereId(1)->with('user')->first();

        $posts = Post::where('category_id', $category->id)
            ->where('status', 2)
            ->latest('id')
            ->paginate(6);
        return view('food.category', compact('posts', 'category', 'date', 'author'));
    }

    public function tag(Tag $tag)
    {
        //el metodo carbon se utiliza para darle estilos a nuestras fechas como dia, mes y año o año, mes y dia
        $date = Carbon::now();
        //pasamos esta variable date a la vista con el metodo compact

        $author = Post::whereId(1)->with('user')->first();

        $posts = $tag->posts()->where('status',2)->latest('id')->paginate(4);

        return view('food.tag', compact('posts', 'tag', 'date', 'author'));
    }
}
