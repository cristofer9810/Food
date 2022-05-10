<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

use Livewire\WithPagination;
use Illuminate\Support\Facades\Cache;


class PostsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public function render()
    {

        return view('livewire.posts-index', compact('posts'));
    }
}
