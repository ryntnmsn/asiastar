<?php

namespace App\Livewire\Home\Game;

use App\Models\Game;
use App\Models\GameBanner;
use Livewire\Component;

class GameHomeIndex extends Component
{

    public function render()
    {
        $gameBanners = GameBanner::where('status', 1);
        $games = Game::with('provider')->where('status', 1);

        $gameBanners = $gameBanners->get();
        $isFeatured = $games->where('is_featured', 1)->get();
        $hotGames = $games->where('game_type', 'hot_game')->get();
        $newGames = Game::where('status', 1)->where('game_type', 'new_game')->get();
        $rtpGames = $games->orderBy('rtp', 'desc')->take(5)->get();

        return view('livewire.home.game.game-home-index', [
            'gameBanners' => $gameBanners,
            'isFeatured' => $isFeatured,
            'hotGames' => $hotGames,
            'newGames' => $newGames,
            'rtpGames' => $rtpGames
        ])->extends('layouts.home.app')->section('contents');
    }
}
