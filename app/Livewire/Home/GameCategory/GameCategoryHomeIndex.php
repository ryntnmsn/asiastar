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

        $lang = app()->getLocale();

        $hotGames = Game::where('status', true)->orderBy('created_at', 'desc')
            ->whereHas('game_category', function($query) {
                $query->where('slug', $this->gameCategorySlug);
            })->whereHas('game_type', function($query) {
                $query->where('slug', 'hot-game');
           })->whereHas('language', function($query) use ($lang) {
            $query->where('code', $lang);
        })->get();

        $newGames = Game::where('status', true)->orderBy('created_at', 'desc')
           ->whereHas('game_category', function($query) {
               $query->where('slug', $this->gameCategorySlug);
           })->whereHas('game_type', function($query) {
               $query->where('slug', 'new-game');
          })->whereHas('language', function($query) use ($lang) {
            $query->where('code', $lang);
        })->get();

        $comingSoonGames = Game::where('status', true)->orderBy('created_at', 'desc')
           ->whereHas('game_category', function($query) {
               $query->where('slug', $this->gameCategorySlug);
           })->whereHas('game_type', function($query) {
               $query->where('slug', 'coming-soon');
          })->whereHas('language', function($query) use ($lang) {
            $query->where('code', $lang);
        })->get();


        $gameBanners = GameBanner::where('status', true)
            ->whereHas('game_category', function($query) {
                $query->where('slug', $this->gameCategorySlug);
            })->get();


        $results = [];
        if(strlen($this->searchQuery) >= 2) {
            $results = Game::where('title','LIKE','%'.$this->searchQuery.'%')
            ->whereHas('language', function($query) use ($lang) {
                $query->where('code', $lang);
            })->get();
        }

        return view('livewire.home.game-category.game-category-home-index', [
            'gameBanners' => $gameBanners,
            'hotGames' => $hotGames,
            'newGames' => $newGames,
            'comingSoonGames' => $comingSoonGames,
            'results' => $results
        ])->extends('layouts.home.app')->section('contents');
    }
}
