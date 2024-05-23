<?php

namespace App\Livewire\Home;

use App\Models\Article;
use App\Models\Game;
use Livewire\Component;

class GlobalSearch extends Component
{

    public $globalSearchQuery = '';


    public function resetGlobalSearch() {
        $this->globalSearchQuery = '';
    }

    public function render()
    {

        $lang = app()->getLocale();

        // $globalSearchResults = [];

            $globalSearchResultsGames = Game::where('title','LIKE','%'.$this->globalSearchQuery.'%')
            ->whereHas('language', function($query) use($lang) {
                $query->where('code', $lang);
            })->limit(10)->get();

            $globalSearchResultsNews = Article::where('name','LIKE','%'.$this->globalSearchQuery.'%')
            ->whereHas('language', function($query) use($lang) {
                $query->where('code', $lang);
            })->limit(10)->get();

        return view('livewire.home.global-search', [
            'globalSearchResultsGames' => $globalSearchResultsGames,
            'globalSearchResultsNews' => $globalSearchResultsNews
        ]);
    }
}
