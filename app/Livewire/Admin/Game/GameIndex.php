<?php

namespace App\Livewire\Admin\Game;

use App\Models\Game;
use App\Models\GameCategory;
use App\Models\GameType;
use Livewire\Component;
use Livewire\WithPagination;

class GameIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $id;
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

    public function delete($id) {
        $game = Game::where('id', $id)->first();
        $this->id = $game->id;
    }

    public function destroy() {
        $game = Game::where('id', $this->id)->first();
        $game->delete();

        $this->js('window.location.reload');
    }

    public function clone($id) {
        $game = Game::with('available_languages', 'themes', 'features')->where('id', $id)->first();

        $game->load('available_languages', 'themes');

        $clone = $game->replicate();

        $clone->save();

        $clone->themes()->attach($game->themes);
        $clone->available_languages()->attach($game->available_languages);
        $clone->features()->attach($game->features);
    }


    public function render()
    {

        $game_categories = GameCategory::all();
        $game_types = GameType::all();

        $games = Game::when($this->search, function ($query) {
            return $query->where('title', 'LIKE', '%' . $this->search . '%');
        })
        ->when($this->sort, function ($query) {
            return $query->orderBy('title', $this->sort);
        })
        ->when($this->sort_by_game_category, function ($query) {
            return $query->where('game_category_id', $this->sort_by_game_category);
        })
        ->when($this->sort_by_game_type, function ($query) {
            return $query->where('game_type', $this->sort_by_game_type);
        })
        ->when($this->sort_by_status, function ($query) {
            return $query->where('status', $this->sort_by_status);
        })->orderBy('created_at', 'desc');

        return view('livewire.admin.game.game-index', [
            'games' => $games->paginate($this->paginate),
            'game_categories' => $game_categories,
            'game_types' => $game_types
        ])->extends('layouts.admin.app')->section('contents');
    }
}
