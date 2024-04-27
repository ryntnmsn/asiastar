<?php

namespace App\Livewire\Admin\Game;

use Livewire\Component;

class GameEdit extends Component
{
    public function render()
    {
        return view('livewire.admin.game.game-edit')
        ->extends('layouts.admin.app')->section('contents');
    }
}
