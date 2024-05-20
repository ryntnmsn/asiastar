<?php

namespace App\Livewire\Admin\Game;

use App\Models\AvailableLanguage;
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
    public $available_language = [];
    public $game_category_id = '';
    public $game_type_id = '';
    public $is_featured = false;
    public $released_date;
    public $volatility = '';
    public $rtp;
    public $maximum_win;
    public $region = '';
    public $themes = [];
    public $features = [];
    public $image_square;
    public $image_horizontal;
    public $image_vertical;
    public $hero_image;

    protected $rules = [
        'title' => 'required|max:255',
        'language_id' => 'required',
        'provider_id' => 'required',
        'volatility' => 'required',
        'game_type_id' => 'required',
        'rtp' => 'required|numeric|between:0,99.99',
        'maximum_win' => 'required|numeric',
        'themes' => 'required',
        'features' => 'required',
        'region' => 'required',
        'game_category_id' => 'required',
        'available_language' => 'required',
        'image_square' => 'required|image|mimes:png,jpg,jpeg|max:256|dimensions:min_width=560,min_height=560,max_width=560,max_height=560',
        'image_vertical' => 'required|image|mimes:png,jpg,jpeg|max:256|dimensions:min_width=560,min_height=560,max_width=560,max_height=950',
        'image_horizontal' => 'required|image|mimes:png,jpg,jpeg|max:256|dimensions:min_width=950,min_height=560,max_width=950,max_height=560',
        'hero_image' => 'required|image|mimes:png,jpg,jpeg|max:256|dimensions:min_width=640,min_height=640,max_width=640,max_height=640',
    ];

    public function store() {
        $this->validate();
        $game = Game::create([
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
            'image_square' => $this->image_square->store('games', 'public'),
            'image_vertical' => $this->image_vertical->store('games', 'public'),
            'image_horizontal' => $this->image_horizontal->store('games', 'public'),
            'hero_image' => $this->hero_image->store('games', 'public'),
        ]);

        foreach($this->available_language as $key => $value) {
            $game->available_languages()->attach($this->available_language[$key]);
        }

        foreach($this->themes as $key => $value) {
            $game->themes()->attach($this->themes[$key]);
        }

        foreach($this->features as $key => $value) {
            $game->features()->attach($this->features[$key]);
        }

        $this->dispatch('created');
    }

    public function render()
    {

        $languages = Language::all();
        $providers = Provider::all();
        $getThemes = Theme::all();
        $gameTypes = GameType::all();
        $gameCategories = GameCategory::all();
        $getFeatures = Feature::all();
        $availableLanguages = AvailableLanguage::all();

        return view('livewire.admin.game.game-create', [
            'languages' => $languages,
            'providers' => $providers,
            'getThemes' => $getThemes,
            'gameTypes' => $gameTypes,
            'gameCategories' => $gameCategories,
            'getFeatures' => $getFeatures,
            'availableLanguages' => $availableLanguages
        ])->extends('layouts.admin.app')->section('contents');
    }
}
