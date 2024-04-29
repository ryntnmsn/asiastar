<?php

namespace App\Livewire\Home\Game;

use App\Models\GameBanner;
use Livewire\Component;

class GameHomeIndex extends Component
{
    public function render()
    {

        $gameBanners = GameBanner::where('status', 1)->get();

        return view('livewire.home.game.game-home-index', [
            'gameBanners' => $gameBanners
        ])->extends('layouts.home.app')->section('contents');
    }
}
