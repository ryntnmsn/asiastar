<?php

namespace App\Livewire\Admin\Game;

use App\Models\Game;
use App\Models\Language;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class GameEdit extends Component
{
    use WithFileUploads;

    public $id;
    public $title;
    public $slug;
    public $description;
    public $language_id = '';
    public $status;
    public $game_category = '';
    public $game_type = '';
    public $is_featured;
    public $released_date;
    public $volatility;
    public $rtp;
    public $maximum_win;
    public $region = '';
    public $theme = '';
    public $old_image;
    public $new_image;

    public function mount($id) {
        $game = Game::where('id', $id)->first();
        $this->title = $game->title;
        $this->description = $game->description;
        $this->language_id = $game->language_id;
        $this->status = $game->status;
        $this->game_category = $game->game_category;
        $this->game_type = $game->game_type;
        $this->is_featured = $game->is_featured;
        $this->released_date = $game->released_date;
        $this->volatility = $game->volatility;
        $this->rtp = $game->rtp;
        $this->maximum_win = $game->maximum_win;
        $this->region = $game->region;
        $this->theme = $game->theme;
        $this->old_image = $game->image;
    }

    public function render()
    {
        $languages = Language::all();

        return view('livewire.admin.game.game-edit', [
            'languages' => $languages
        ])->extends('layouts.admin.app')->section('contents');
    }
}
