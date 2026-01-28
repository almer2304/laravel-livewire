<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Livewire\Livewire;

class GenreController extends Controller
{
    public function index()
    {
        return ('livewire:backend.genre.index');
    }
}
