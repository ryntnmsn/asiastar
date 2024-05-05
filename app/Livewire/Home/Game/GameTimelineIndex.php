<?php

namespace App\Livewire\Home\Game;

use App\Models\AvailableLanguage;
use App\Models\Game;
use App\Models\GameBanner;
use App\Models\GameType;
use App\Models\Provider;
use App\Models\Theme;
use Carbon\Carbon;
use Livewire\Component;

class GameTimelineIndex extends Component
{
    public $amount = 15;
    public $filterTheme = '';
    public $filterProvider = '';
    public $filterGameType = '';
    public $filterRTP = '';
    public $filterSortSelect = 'status';
    public $filterSortOrder = '';
    public $filterLanguage = '';
    public $searchQuery = '';
    public $filterYear = '';

    public function loadMore() {
        $this->amount += 6;
    }

    public function resetSearch() {
        $this->searchQuery = '';
    }

    public function render()
    {
        $lang = app()->getLocale();

        $gameBanners = GameBanner::where('status', true);

        $games = Game::where('status', true)
            ->when($this->filterYear, function ($query) {
                $query->where(date('Y', strtotime('released_date')), $this->filterYear);
            })
            ->take($this->amount);

        $date = date('Y', strtotime($games->released_date));

        dd($date);

        $results = [];
        if(strlen($this->searchQuery) >= 2) {
            $results = Game::where('title','LIKE','%'.$this->searchQuery.'%')->get();
        }

        return view('livewire.home.game.game-timeline-index', [
            'gameBanners' => $gameBanners->get(),
            'games' => $games->get(),
            'results' => $results
        ])->extends('layouts.home.app')->section('contents');
    }
}
