<?php

namespace App\Livewire\Home;

use App\Models\Game;
use Livewire\Component;

class HomeIndex extends Component
{
    public function render()
    {
        $lang = app()->getLocale();

        $games = Game::whereHas('language', function ($query) use ($lang) {
            $query->where('code', $lang);
        });

        return view('livewire.home.home-index', [
            'games' => $games->paginate(20)
        ])->extends('layouts.home.app')->section('contents');
    }
}
