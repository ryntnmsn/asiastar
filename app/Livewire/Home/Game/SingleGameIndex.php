<?php

namespace App\Livewire\Home\Game;

use App\Models\Game;
use Livewire\Component;

class SingleGameIndex extends Component
{
    public $title;
    public $description;
    public $provider;
    public $available_language = [];
    public $game_category_id = '';
    public $game_type_id = '';
    public $released_date;
    public $volatility = '';
    public $rtp;
    public $maximum_win;
    public $region = '';
    public $themes = [];
    public $features = [];
    public $image_square;
    public $image_vertical;
    public $hero_image;

    public function mount($id) {
        $game = Game::where('id', $id)->first();


        $this->themes = $game->themes()->get();

        $this->features = $game->features()->get();

        $this->available_language = $game->available_languages()->get();

        $this->title = $game->title;
        $this->description = $game->description;
        $this->provider = $game->provider;
        $this->game_category_id = $game->game_category_id;
        $this->game_type_id = $game->game_type_id;
        $this->released_date = $game->released_date;
        $this->volatility = $game->volatility;
        $this->rtp = $game->rtp;
        $this->maximum_win = $game->maximum_win;
        $this->region = $game->region;
        $this->image_square = $game->image_square;
        $this->hero_image = $game->hero_image;
    }

    public function render()
    {
        $lang = app()->getLocale();
        $otherGames = Game::where('status', true)
        ->whereHas('language', function($query) use($lang) {
            $query->where('code', $lang);
        })->inRandomOrder()->limit(6)->get();

        return view('livewire.home.game.single-game-index', [
            'otherGames' => $otherGames
        ])->extends('layouts.home.app')->section('contents');
    }
}
