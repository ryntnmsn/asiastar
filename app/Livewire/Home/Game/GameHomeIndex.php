<?php

namespace App\Livewire\Home\Game;

use App\Models\Game;
use App\Models\GameBanner;
use Livewire\Component;

class GameHomeIndex extends Component
{
    public function render()
    {

        $gameBanners = GameBanner::where('status', 1)->get();
        $isFeatured = Game::where('is_featured', 1)->where('status', 1)->get();
        $hotGames = Game::where('game_type', 'hot_game')->where('status', '1')->get();
        $newGames = Game::where('game_type', 'new_game')->where('status', '1')->get();

        return view('livewire.home.game.game-home-index', [
            'gameBanners' => $gameBanners,
            'isFeatured' => $isFeatured,
            'hotGames' => $hotGames,
            'newGames' => $newGames
        ])->extends('layouts.home.app')->section('contents');
    }
}
