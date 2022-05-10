<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class ShowCategory extends Component
{
    public function render()
    {
        $categories = Category::all();

        return view('livewire.admin.show-category', compact('categories'));
    }
}
