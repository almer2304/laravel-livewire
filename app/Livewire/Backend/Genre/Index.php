<?php

namespace App\Livewire\Backend\Genre;

use Livewire\Component;
use App\Models\Genre;
class Index extends Component
{
    public $name, $slug;
    public $showForm = false;
    public function render()
    {
        $genre = Genre::latest()->get();
        return view('livewire.backend.genre.index', compact('genre'));
    }

    public function create()
    {
        $this->showForm = true;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|unique:genres,name',
            'slug' => 'required|unique:genres,slug',
        ]);

        Genre::create([
            'name' => $this->name,
            'slug' => $this->slug,
        ]);

        $this->reset();
        $this->showForm = false;
    }
}
