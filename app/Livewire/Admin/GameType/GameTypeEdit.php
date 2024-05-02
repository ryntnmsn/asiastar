<?php

namespace App\Livewire\Admin\GameType;

use App\Models\GameType;
use Livewire\Component;
use Illuminate\Support\Str;

class GameTypeEdit extends Component
{

    public $id;
    public $name;

    public function mount($id) {
        $gameType = GameType::where('id', $id)->first();
        $this->id = $gameType->id;
        $this->name = $gameType->name;
    }

    public function update() {

        $this->validate([
            'name' => 'required|max:255'
        ]);

        $gameType = GameType::where('id', $this->id)->first();

        $gameType->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);

        $this->dispatch('updated');
    }

    public function render()
    {
        return view('livewire.admin.game-type.game-type-edit')
        ->extends('layouts.admin.app')->section('contents');
    }
}
