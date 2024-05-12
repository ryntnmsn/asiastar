<?php

namespace App\Livewire\Home\GameCategory;

use App\Models\AvailableLanguage;
use App\Models\Game;
use App\Models\GameBanner;
use App\Models\GameCategory;
use App\Models\GameType;
use App\Models\Provider;
use App\Models\Theme;
use Livewire\Component;

class GameCategoryHomeAllIndex extends Component
{

    public $gameCategorySlug;

    public $isGridView = true;
    public $isListView = false;
    public $paginate = 15;
    public $amount = 15;
    public $filterTheme = '';
    public $filterProvider = '';
    public $filterGameType = '';
    public $filterRTP = '';
    public $filterSortSelect = 'status';
    public $filterSortOrder = '';
    public $filterLanguage = '';
    public $searchQuery = '';

    public function grid() {
        $this->isGridView = true;
        $this->isListView = false;
    }

    public function list() {
        $this->isGridView = false;
        $this->isListView = true;
    }

    public function loadMore() {
        $this->amount += 6;
    }

    public function resetSearch() {
        $this->searchQuery = '';
    }

    public function resetFilters() {
        $this->filterTheme = '';
        $this->filterProvider = '';
        $this->filterGameType = '';
        $this->filterRTP = '';
        $this->filterLanguage = '';

    }

    public function mount($slug) {
        $gameCategory = GameCategory::where('slug', $slug)->first();

        $this->gameCategorySlug = $gameCategory->slug;
    }

    public function render()
    {

        $lang = app()->getLocale();

        $gameBanners = GameBanner::where('status', true)
            ->whereHas('game_category', function($query) {
                $query->where('slug', $this->gameCategorySlug);
            })->get();




        $getThemes = Theme::all();
        $gameTypes = GameType::all();
        $providers = Provider::all();
        $availableLanguages = AvailableLanguage::all();


        $games = Game::where('status', true)
            ->whereHas('game_category', function($query) {
                $query->where('slug', $this->gameCategorySlug);
            })
            ->when($this->filterTheme, function($query) {
                $query->whereHas('themes', function($query) {
                    return $query->where('theme_id', $this->filterTheme);
                });
            })
            ->when($this->filterGameType, function($query) {
                return $query->where('game_type_id', $this->filterGameType);
            })
            ->when($this->filterProvider, function($query) {
                return $query->where('provider_id', $this->filterProvider);
            })
            ->when($this->filterRTP, function($query) {

                if($this->filterRTP == 50) {
                    return $query->where('rtp', '<=' , 50);
                } else {
                    return $query->where('rtp', '>=' ,$this->filterRTP)->where('rtp', '<' , $this->filterRTP + 10);
                }
            })
            ->when($this->filterSortOrder, function($query) {
                if($this->filterSortSelect == 'maximum_win') {
                    return $query->orderByRaw('CAST(maximum_win AS UNSIGNED)' . $this->filterSortOrder);
                } else {
                    return $query->orderBy($this->filterSortSelect, $this->filterSortOrder);
                }
            })
            ->when($this->filterLanguage, function($query) {
                $query->whereHas('available_languages', function ($query) {
                    return $query->where('available_language_id', $this->filterLanguage);
                });
            })
            // ->whereHas('language', function($query) use($lang) {
            //     $query->where('code', $lang);
            // })
            ->orderBy('created_at', 'desc')
            ->take($this->amount)
            ->get();


            $results = [];
            if(strlen($this->searchQuery) >= 2) {
                $results = Game::where('title','LIKE','%'.$this->searchQuery.'%')->get();
            }

        return view('livewire.home.game-category.game-category-home-all-index', [
            'games' => $games,
            'gameBanners' => $gameBanners,
            'getThemes' => $getThemes,
            'gameTypes' => $gameTypes,
            'providers' => $providers,
            'availableLanguages' => $availableLanguages,
            'results' => $results
        ])->extends('layouts.home.app')->section('contents');
    }
}
