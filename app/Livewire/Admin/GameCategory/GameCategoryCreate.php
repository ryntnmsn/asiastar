<?php

namespace App\Livewire\Admin\GameCategory;

use App\Models\GameCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class GameCategoryCreate extends Component
{
    public $name;

    public function store() {
        $this->validate([
            'name' => 'required|max:255|unique:game_categories',
        ]);

        GameCategory::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);

        $this->dispatch('created');
    }

    public function render()
    {
        return view('livewire.admin.game-category.game-category-create')
        ->extends('layouts.admin.app')->section('contents');
    }
}
