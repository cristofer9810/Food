<?php

namespace App\Http\Livewire\Admin;

use App\Models\Saucer;
use Livewire\Component;

use Livewire\WithPagination;

class SaucersIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search = "";

    public $sort = 'id';
    public $direction = 'desc';

    public function updatingSearch()
    {

        $this->resetPage();
    }

    public function render()
    {

        /* $saucers = Saucer::all(); */

        $saucers = Saucer::where('name', 'LIKE', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->latest('id')
            ->paginate();

        return view('livewire.admin.saucers-index', compact('saucers'));
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }
}
