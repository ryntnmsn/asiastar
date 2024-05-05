<?php

namespace App\Livewire\Home\Game;

use Livewire\Component;

class SingleGameIndex extends Component
{
    public function render()
    {
        return view('livewire.home.game.single-game-index')->extends('layouts.home.app')->section('contents');
    }
}
