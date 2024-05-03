<?php

namespace App\Livewire\Home\Game;

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

    public function render()
    {
        $themes = Theme::all();
        $gameTypes = GameType::all();
        $providers = Provider::all();

        $gameBanners = GameBanner::where('status', true);
        
        $games = Game::where('status', true)
            ->when($this->filterTheme, function($query) {
                return $query->where('theme_id', $this->filterTheme);
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
            ->orderBy('created_at', 'desc')
            ->take($this->amount);

            // $gamestest = Game::where('rtp', '>=', 90)->where('rtp', '<' , 91 + 10)->get();
            
            // dd($gamestest);

        

        return view('livewire.home.game.all-game-home-index', [
            'gameBanners' => $gameBanners->get(),
            'games' => $games->get(),
            'themes' => $themes,
            'gameTypes' => $gameTypes,
            'providers' => $providers,
        ])->extends('layouts.home.app')->section('contents');;
    }
}
