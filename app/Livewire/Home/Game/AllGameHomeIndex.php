<?php

namespace App\Livewire\Home\Game;

use App\Models\AvailableLanguage;
use App\Models\Game;
use App\Models\GameBanner;
use App\Models\GameType;
use App\Models\Provider;
use App\Models\Theme;
use Livewire\Component;
use Livewire\WithPagination;

class AllGameHomeIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

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

    public function render()
    {

        $lang = app()->getLocale();

        $getThemes = Theme::all();
        $gameTypes = GameType::all();
        $providers = Provider::all();
        $availableLanguages = AvailableLanguage::all();

        $gameBanners = GameBanner::where('status', true);

        $games = Game::where('status', true)
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
            ->take($this->amount);


        $results = [];
        if(strlen($this->searchQuery) >= 2) {
            $results = Game::where('title','LIKE','%'.$this->searchQuery.'%')->get();
        }


        return view('livewire.home.game.all-game-home-index', [
            'gameBanners' => $gameBanners->get(),
            'games' => $games->get(),
            'getThemes' => $getThemes,
            'gameTypes' => $gameTypes,
            'providers' => $providers,
            'availableLanguages' => $availableLanguages,
            'results' => $results
        ])->extends('layouts.home.app')->section('contents');;
    }
}
