<?php

namespace App\Livewire\Home;

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

        $globalSearchResults = [];
        if(strlen($this->globalSearchQuery) >= 2) {
            $globalSearchResults = Game::where('title','LIKE','%'.$this->globalSearchQuery.'%')
            ->whereHas('language', function($query) use($lang) {
                $query->where('code', $lang);
            })->get();
        }

        return view('livewire.home.global-search', [
            'globalSearchResults' => $globalSearchResults
        ]);
    }
}
