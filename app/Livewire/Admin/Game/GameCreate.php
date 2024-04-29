<?php

namespace App\Livewire\Admin\Game;

use App\Models\Game;
use App\Models\Language;
use App\Models\Provider;
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
    public $game_category = '';
    public $game_type = '';
    public $is_featured;
    public $released_date;
    public $volatility;
    public $rtp;
    public $maximum_win;
    public $region = '';
    public $theme = '';
    public $image;

    protected $rules = [
        'title' => 'required|max:255',
        'language_id' => 'required',
        'provider_id' => 'required',
        'game_type' => 'required',
        'theme' => 'required',
        'region' => 'required',
        'game_category' => 'required',
        'image' => 'required|image|mimes:png,jpg,jpeg|max:512|dimensions:min_width=560,min_height=950,max_width=560,max_height=950',
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
            'game_category' => $this->game_category,
            'game_type' => $this->game_type,
            'is_featured' => $this->is_featured,
            'released_date' => $this->released_date,
            'volatility' => $this->volatility,
            'rtp' => $this->rtp,
            'maximum_win' => $this->maximum_win,
            'region' => $this->region,
            'theme' => $this->theme,
            'image' => $this->image->store('games', 'public'),
        ]);

        $this->dispatch('created');
    }

    public function render()
    {

        $languages = Language::all();
        $providers = Provider::all();

        return view('livewire.admin.game.game-create', [
            'languages' => $languages,
            'providers' => $providers
        ])->extends('layouts.admin.app')->section('contents');
    }
}
