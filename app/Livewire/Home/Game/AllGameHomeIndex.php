<?php

namespace App\Livewire\Home\Game;

use App\Models\Game;
use App\Models\GameBanner;
use Livewire\Component;

class AllGameHomeIndex extends Component
{
    public function render()
    {

        $gameBanners = GameBanner::where('status', 1);
        $games = Game::where('status', 1)->orderBy('created_at', 'desc');

        return view('livewire.home.game.all-game-home-index', [
            'gameBanners' => $gameBanners->get(),
            'games' => $games->get()
        ])->extends('layouts.home.app')->section('contents');;
    }
}
