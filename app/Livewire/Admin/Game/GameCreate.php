<?php

namespace App\Livewire\Admin\Game;

use App\Models\Feature;
use App\Models\Game;
use App\Models\GameCategory;
use App\Models\GameType;
use App\Models\Language;
use App\Models\Provider;
use App\Models\Theme;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class GameCreate extends Component
{

    use WithFileUploads;

    public $title;
    public $slug;
    public $description;
    public $language_id = '';
    public $provider_id = '';
    public $status;
    public $game_category_id = '';
    public $game_type_id = '';
    public $is_featured;
    public $released_date;
    public $volatility = '';
    public $rtp;
    public $maximum_win;
    public $region = '';
    public $theme_id = '';
    public $feature_id = '';
    public $image_square;
    public $image_horizontal;
    public $image_vertical;

    protected $rules = [
        'title' => 'required|max:255',
        'language_id' => 'required',
        'provider_id' => 'required',
        'volatility' => 'required',
        'game_type_id' => 'required',
        'rtp' => 'required|numeric|between:0,99.99',
        'maximum_win' => 'required|numeric',
        'theme_id' => 'required',
        'region' => 'required',
        'game_category_id' => 'required',
        'image_square' => 'required|image|mimes:png,jpg,jpeg|max:256|dimensions:min_width=560,min_height=560,max_width=560,max_height=560',
        'image_vertical' => 'required|image|mimes:png,jpg,jpeg|max:256|dimensions:min_width=560,min_height=560,max_width=560,max_height=950',
        'image_horizontal' => 'required|image|mimes:png,jpg,jpeg|max:256|dimensions:min_width=950,min_height=560,max_width=950,max_height=560',
    ];

    public function store() {
        $this->validate();
        Game::create([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'description' => $this->description,
            'language_id' => $this->language_id,
            'provider_id' => $this->provider_id,
            'status' => $this->status,
            'game_category_id' => $this->game_category_id,
            'game_type_id' => $this->game_type_id,
            'is_featured' => $this->is_featured,
            'released_date' => $this->released_date,
            'volatility' => $this->volatility,
            'rtp' => $this->rtp,
            'maximum_win' => $this->maximum_win,
            'region' => $this->region,
            'theme_id' => $this->theme_id,
            'feature_id' => $this->feature_id,
            'image_square' => $this->image_square->store('games', 'public'),
            'image_vertical' => $this->image_vertical->store('games', 'public'),
            'image_horizontal' => $this->image_horizontal->store('games', 'public'),
        ]);

        $this->dispatch('created');
    }

    public function render()
    {

        $languages = Language::all();
        $providers = Provider::all();
        $themes = Theme::all();
        $gameTypes = GameType::all();
        $gameCategories = GameCategory::all();
        $features = Feature::all();

        return view('livewire.admin.game.game-create', [
            'languages' => $languages,
            'providers' => $providers,
            'themes' => $themes,
            'gameTypes' => $gameTypes,
            'gameCategories' => $gameCategories,
            'features' => $features,
        ])->extends('layouts.admin.app')->section('contents');
    }
}
