<?php

namespace App\Livewire\Admin\Game;

use App\Models\Game;
use Livewire\Component;
use Livewire\WithPagination;

class GameIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $search = '';
    public $sort = '';
    public $paginate = 20;
    public $sort_by_game_category = '';
    public $sort_by_game_type = '';
    public $sort_by_status = '';


    public function clearFilter() {
        $this->search = '';
        $this->sort = '';
        $this->sort_by_game_category = '';
        $this->sort_by_game_type = '';
        $this->sort_by_status = '';
    }


    public function render()
    {
        $games = Game::orderBy('created_at', 'desc')
        ->when($this->search, function ($query) {
            return $query->where('title', 'LIKE', '%' . $this->search . '%');
        })
        ->when($this->sort, function ($query) {
            return $query->orderBy('title', $this->sort);
        })
        ->when($this->sort_by_game_category, function ($query) {
            return $query->where('game_category', $this->sort_by_game_category);
        })
        ->when($this->sort_by_game_type, function ($query) {
            return $query->where('game_type', $this->sort_by_game_type);
        })
        ->when($this->sort_by_status, function ($query) {
            return $query->where('status', $this->sort_by_status);
        });

        return view('livewire.admin.game.game-index', [
            'games' => $games->paginate($this->paginate)
        ])->extends('layouts.admin.app')->section('contents');
    }
}
