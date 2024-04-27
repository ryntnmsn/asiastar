<?php

namespace App\Livewire\Admin\Game;

use App\Models\Game;
use Livewire\Component;

class GameIndex extends Component
{
    public function render()
    {
        $games = Game::all();

        return view('livewire.admin.game.game-index', [
            'games' => $games
        ])->extends('layouts.admin.app')->section('contents');
    }
}
