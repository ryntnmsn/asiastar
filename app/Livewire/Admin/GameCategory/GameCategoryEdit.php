<?php

namespace App\Livewire\Admin\GameCategory;

use App\Models\GameCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class GameCategoryEdit extends Component
{

    public $id;
    public $name;

    public function mount($id) {
        $gameCategory = GameCategory::where('id', $id)->first();
        $this->id = $gameCategory->id;
        $this->name = $gameCategory->name;
    }

    public function update() {

        $this->validate([
            'name' => 'required|max:255'
        ]);

        $gameCategory = GameCategory::where('id', $this->id)->first();

        $gameCategory->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);

        $this->dispatch('updated');
    }

    public function render()
    {
        return view('livewire.admin.game-category.game-category-edit')
        ->extends('layouts.admin.app')->section('contents');
    }
}
