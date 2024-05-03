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
    public $theme_id = '';
    public $feature_id = '';
    public $old_image_square;
    public $old_image_horizontal;
    public $old_image_vertical;
    public $new_image_square;
    public $new_image_horizontal;
    public $new_image_vertical;

    public function mount($id) {
        $game = Game::where('id', $id)->first();
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
        $this->theme_id = $game->theme_id;
        $this->feature_id = $game->feature_id;
        $this->old_image_square = $game->image_square;
        $this->old_image_horizontal = $game->image_horizontal;
        $this->old_image_vertical = $game->image_vertical;
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
            'feature_id' => 'required',
            'theme_id' => 'required',
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


        $this->validate($validate_array);

        $game = Game::where('id', $this->id)->first();

        $image_square = '';
        $image_horizontal = '';
        $image_vertical = '';

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
            'theme_id' => $this->theme_id,
            'feature_id' => $this->feature_id,
            'image_square' => $image_square,
            'image_horizontal' => $image_horizontal,
            'image_vertical' => $image_vertical,
        ]);

        $this->dispatch('updated');
    }


    public function render()
    {
        $languages = Language::all();
        $providers = Provider::all();
        $themes = Theme::all();
        $gameTypes = GameType::all();
        $gameCategories = GameCategory::all();
        $features = Feature::all();

        return view('livewire.admin.game.game-edit', [
            'languages' => $languages,
            'providers' => $providers,
            'themes' => $themes,
            'gameTypes' => $gameTypes,
            'gameCategories' => $gameCategories,
            'features' => $features,
        ])->extends('layouts.admin.app')->section('contents');
    }
}
