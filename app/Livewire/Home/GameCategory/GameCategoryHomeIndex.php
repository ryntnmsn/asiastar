<?php

namespace App\Livewire\Home\GameCategory;

use App\Models\Game;
use App\Models\GameBanner;
use App\Models\GameCategory;
use Livewire\Component;

class GameCategoryHomeIndex extends Component
{

    public $gameCategorySlug;
    public $searchQuery = '';

    public function mount($slug) {
        $gameCategory = GameCategory::where('slug', $slug)->first();

        $this->gameCategorySlug = $gameCategory->slug;
    }

    public function resetSearch() {
        $this->searchQuery = '';
    }

    public function render()
    {

        $hotGames = Game::where('status', true)->orderBy('created_at', 'desc')
            ->whereHas('game_category', function($query) {
                $query->where('slug', $this->gameCategorySlug);
            })->whereHas('game_type', function($query) {
                $query->where('slug', 'hot-game');
           })->get();

        $newGames = Game::where('status', true)->orderBy('created_at', 'desc')
           ->whereHas('game_category', function($query) {
               $query->where('slug', $this->gameCategorySlug);
           })->whereHas('game_type', function($query) {
               $query->where('slug', 'new-game');
          })->get();

        $comingSoonGames = Game::where('status', true)->orderBy('created_at', 'desc')
           ->whereHas('game_category', function($query) {
               $query->where('slug', $this->gameCategorySlug);
           })->whereHas('game_type', function($query) {
               $query->where('slug', 'coming-soon');
          })->get();


        $gameBanners = GameBanner::where('status', true)
            ->whereHas('game_category', function($query) {
                $query->where('slug', $this->gameCategorySlug);
            })->get();

        return view('livewire.home.game-category.game-category-home-index', [
            'gameBanners' => $gameBanners,
            'hotGames' => $hotGames,
            'newGames' => $newGames,
            'comingSoonGames' => $comingSoonGames,
        ])->extends('layouts.home.app')->section('contents');
    }
}
