<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateCat extends Component
{

    public $open = true;

    public function render()
    {
        return view('livewire.create-cat');
    }
}
