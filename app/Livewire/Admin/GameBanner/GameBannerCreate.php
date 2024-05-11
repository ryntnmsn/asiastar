<?php

namespace App\Livewire\Admin\GameBanner;

use App\Models\GameBanner;
use App\Models\GameCategory;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class GameBannerCreate extends Component
{
    use WithFileUploads;

    public $image;
    public $game_category_id = '';
    public $status = false;

    public function store() {
        $this->validate([
            'game_category_id' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:512|dimensions:min_width=1200,min_height=480,max_width=1200,max_height=480'
        ]);

        GameBanner::create([
            'status' => $this->status,
            'game_category_id' => $this->game_category_id,
            'image' => $this->image->store('banners', 'public')
        ]);

        $this->dispatch('created');
    }

    public function render()
    {

        $gameCategories = GameCategory::all();

        return view('livewire.admin.game-banner.game-banner-create', [
            'gameCategories' => $gameCategories
        ])->extends('layouts.admin.app')->section('contents');
    }
}
