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

        $gameBanners = GameBanner::where('status', 1);
        
        $games = Game::where('status', 1)->orderBy('created_at', 'desc')
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
