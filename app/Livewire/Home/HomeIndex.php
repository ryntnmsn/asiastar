<?php

namespace App\Livewire\Home;

use App\Models\Game;
use App\Models\Partner;
use Livewire\Component;

class HomeIndex extends Component
{
    public function render()
    {
        // $lang = app()->getLocale();

        // $games = Game::whereHas('language', function ($query) use ($lang) {
        //     $query->where('code', $lang);
        // });

        $gamesCol1 = Game::where('status', true)->inRandomOrder()->limit(10);
        $gamesCol2 = Game::where('status', true)->inRandomOrder()->limit(10);
        $gamesCol3 = Game::where('status', true)->inRandomOrder()->limit(10);
        $gamesCol4 = Game::where('status', true)->inRandomOrder()->limit(10);
        $gamesCol5 = Game::where('status', true)->inRandomOrder()->limit(10);
        $partners = Partner::where('status', true);

        return view('livewire.home.home-index', [
            'gamesCol1' => $gamesCol1->get(),
            'gamesCol2' => $gamesCol2->get(),
            'gamesCol3' => $gamesCol3->get(),
            'gamesCol4' => $gamesCol4->get(),
            'gamesCol5' => $gamesCol5->get(),
            'partners' => $partners->get()
        ])->extends('layouts.home.app')->section('contents');
    }
}
