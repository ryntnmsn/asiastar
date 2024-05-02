<?php

namespace App\Livewire\Home\Game;

use App\Models\Game;
use App\Models\GameBanner;
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
        $gameBanners = GameBanner::where('status', 1);
        $games = Game::where('status', 1)->orderBy('created_at', 'desc')
            ->when($this->filterTheme, function($query) {
                return $query->where('theme_id', $this->filterTheme);
            })->take($this->amount);
        $themes = Theme::all();

        return view('livewire.home.game.all-game-home-index', [
            'gameBanners' => $gameBanners->get(),
            'games' => $games->get(),
            'themes' => $themes,
        ])->extends('layouts.home.app')->section('contents');;
    }
}
