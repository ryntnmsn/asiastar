<?php

namespace App\Livewire\Home\Game;

use App\Models\Game;
use App\Models\GameBanner;
use App\Models\GameType;
use Livewire\Component;

class GameHomeIndex extends Component
{

    public function render()
    {
        $gameBanners = GameBanner::where('status', 1)->get();
        $games = Game::where('status', 1);

        $isFeatured = $games->where('is_featured', 1)->get();

        $getGameTypeNewGame = GameType::where('slug', 'new-game')->value('id');
        $getGameTypeHotGame = GameType::where('slug', 'hot-game')->value('id');

        // dd($getGameTypeNewGame);
        $newGames = Game::where('status', 1)->where('game_type_id', $getGameTypeNewGame)->get();
        $hotGames = Game::where('status', 1)->where('game_type_id', $getGameTypeHotGame)->get();

        $rtpGames = $games->orderByRaw('CAST(rtp AS UNSIGNED) DESC')->take(6)->get();

        return view('livewire.home.game.game-home-index', [
            'gameBanners' => $gameBanners,
            'isFeatured' => $isFeatured,
            'hotGames' => $hotGames,
            'newGames' => $newGames,
            'rtpGames' => $rtpGames
        ])->extends('layouts.home.app')->section('contents');
    }
}
