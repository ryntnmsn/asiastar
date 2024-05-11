<?php

namespace App\Livewire\Home\GameCategory;

use App\Models\GameBanner;
use App\Models\GameCategory;
use Livewire\Component;

class GameCategoryHomeIndex extends Component
{

    public $gameCategorySlug;

    public function mount($slug) {
        $gameCategory = GameCategory::where('slug', $slug)->first();

        $this->gameCategorySlug = $gameCategory->slug;
    }

    public function render()
    {

        $gameBanners = GameBanner::where('status', true)
            ->whereHas('game_category', function($query) {
                $query->where('slug', $this->gameCategorySlug);
            })->get();


        return view('livewire.home.game-category.game-category-home-index', [
            'gameBanners' => $gameBanners
        ])->extends('layouts.home.app')->section('contents');
    }
}
