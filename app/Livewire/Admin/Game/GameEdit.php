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

class GameEdit extends Component
{
    use WithFileUploads;

    public $id;
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
    public $themes = [];
    public $features = [];
    public $available_language = [];
    public $old_image_square;
    public $old_image_horizontal;
    public $old_image_vertical;
    public $old_hero_image;
    public $new_image_square;
    public $new_image_horizontal;
    public $new_image_vertical;
    public $new_hero_image;

    public function mount($id) {
        $game = Game::where('id', $id)->first();

        $this->themes = $game->themes->pluck('id');

        $this->features = $game->features->pluck('id');

        $this->available_language = $game->available_languages->pluck('id');

        $this->id = $game->id;
        $this->title = $game->title;
        $this->description = $game->description;
        $this->language_id = $game->language_id;
        $this->provider_id = $game->provider_id;
        $this->status = $game->status;
        $this->game_category_id = $game->game_category_id;
        $this->game_type_id = $game->game_type_id;
        $this->is_featured = $game->is_featured;
        $this->released_date = $game->released_date;
        $this->volatility = $game->volatility;
        $this->rtp = $game->rtp;
        $this->maximum_win = $game->maximum_win;
        $this->region = $game->region;
        $this->old_image_square = $game->image_square;
        $this->old_image_horizontal = $game->image_horizontal;
        $this->old_image_vertical = $game->image_vertical;
        $this->old_hero_image = $game->hero_image;
    }

    public function update() {

        $validate_array = [
            'title' => 'required|max:255',
            'language_id' => 'required',
            'rtp' => 'required|numeric|between:0,99.99',
            'maximum_win' => 'required|numeric',
            'provider_id' => 'required',
            'game_type_id' => 'required',
            'game_category_id' => 'required',
            'available_language' => 'required',
            'features' => 'required',
            'themes' => 'required',
            'region' => 'required',
        ];

        if(isset($this->new_image_square)) {
            $validate_array = [
                'new_image_square' => 'required|image|mimes:png,jpg,jpeg|max:512|dimensions:min_width=560,min_height=560,max_width=560,max_height=560'
            ];
        }

        if(isset($this->new_image_horizontal)) {
            $validate_array = [
                'new_image_horizontal' => 'required|image|mimes:png,jpg,jpeg|max:512|dimensions:min_width=950,min_height=560,max_width=950,max_height=560'
            ];
        }

        if(isset($this->new_image_vertical)) {
            $validate_array = [
                'new_image_vertical' => 'required|image|mimes:png,jpg,jpeg|max:512|dimensions:min_width=560,min_height=950,max_width=560,max_height=950'
            ];
        }

        if(isset($this->new_hero_image)) {
            $validate_array = [
                'new_hero_image' => 'required|image|mimes:png,jpg,jpeg|max:512|dimensions:min_width=1080,min_height=1080,max_width=1080,max_height=1080'
            ];
        }


        $this->validate($validate_array);

        $game = Game::where('id', $this->id)->first();

        $image_square = '';
        $image_horizontal = '';
        $image_vertical = '';
        $hero_image = '';

        if($this->new_image_square != null) {
            $image_square = $this->new_image_square->store('games', 'public');
        } else {
            $image_square = $this->old_image_square;
        }

        if($this->new_image_horizontal != null) {
            $image_horizontal = $this->new_image_horizontal->store('games', 'public');
        } else {
            $image_horizontal = $this->old_image_horizontal;
        }

        if($this->new_image_vertical != null) {
            $image_vertical = $this->new_image_vertical->store('games', 'public');
        } else {
            $image_vertical = $this->old_image_vertical;
        }

        if($this->new_hero_image != null) {
            $hero_image = $this->new_hero_image->store('games', 'public');
        } else {
            $hero_image = $this->old_hero_image;
        }

        $game->update([
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
            'image_square' => $image_square,
            'image_horizontal' => $image_horizontal,
            'image_vertical' => $image_vertical,
            'hero_image' => $hero_image,
        ]);

        $countLanguages = count($game->available_languages);
        $countThemes = count($game->themes);
        $countFeatures = count($game->features);

        if($countLanguages == 0) {
            foreach($this->available_language as $key => $value) {
                $game->available_languages()->attach($this->available_language[$key]);
            }
        } else {
            $game->available_languages()->sync($this->available_language);
        }

        if($countThemes == 0) {
            foreach($this->themes as $key => $value) {
                $game->themes()->attach($this->themes[$key]);
            }
        } else {
            $game->themes()->sync($this->themes);
        }

        if($countFeatures == 0) {
            foreach($this->features as $key => $value) {
                $game->features()->attach($this->features[$key]);
            }
        } else {
            $game->features()->sync($this->features);
        }

        $this->dispatch('updated');
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

        return view('livewire.admin.game.game-edit', [
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
