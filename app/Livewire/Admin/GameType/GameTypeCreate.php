<?php

namespace App\Livewire\Admin\GameType;

use App\Models\GameType;
use Livewire\Component;
use Illuminate\Support\Str;

class GameTypeCreate extends Component
{
    public $name;

    public function store() {
        $this->validate([
            'name' => 'required|max:255|unique:game_types',
        ]);

        GameType::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);

        $this->dispatch('created');
    }

    public function render()
    {
        return view('livewire.admin.game-type.game-type-create')
        ->extends('layouts.admin.app')->section('contents');
    }
}
