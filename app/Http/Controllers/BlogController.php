<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;

use Livewire\WithPagination;

class BlogController extends Controller
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public function index()
    {
        if (request()->page) {
            $key = 'posts' . request()->page;
        }else {
            $key = 'posts';
        }

        if (Cache::has($key)) {
            $posts = Cache::get($key);
        }else {
            $posts = Post::where('status', 2)->latest('id')->paginate(8);
            Cache::put($key, $posts);
        }

        $author = Post::whereId(1)->with('user')->first();

        $date = Carbon::now();

        return view('food.blog', compact('posts', 'author', 'date'));
    }

    public function show(Post $post)
    {

        //el metodo carbon se utiliza para darle estilos a nuestras fechas como dia, mes y año o año, mes y dia
        $date = Carbon::now();
        //pasamos esta variable date a la vista con el metodo compact

        $authors = Post::whereId(1)->with('user')->first();

        $categories = Category::all();

        $tags = Tag::all();

        $similares = Post::where('category_id', $post->category_id)
                           ->where('status', 2)
                           ->where('id', '!=', $post->id)
                           ->latest('id')
                           ->take(6)
                           ->get();


        return view('food.blog-details', compact('post', 'similares', 'date', 'authors', 'categories', 'tags'));

    }

    public function category(Category $category){

        $posts = Post::where('category_id', $category->id)
                             ->where('status', 2)
                             ->latest('id')
                             ->paginate(6);

        return view('food.blog-details', compact('posts', 'category'));

    }
}
