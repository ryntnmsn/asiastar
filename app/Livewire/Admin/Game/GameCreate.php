<?php

namespace App\Livewire\Admin\Game;

use App\Models\Game;
use App\Models\Language;
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
    public $status;
    public $game_category = '';
    public $game_type = '';
    public $is_featured;
    public $released_date;
    public $volatility;
    public $rtp;
    public $maximum_win;
    public $region;
    public $theme;
    public $image;

    protected $rules = [
        'name' => 'required|max:255',
        'language_id' => 'required',
        'game_type' => 'required',
        'game_category' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,png',
    ];

    public function store() {
        $this->validate();
        Game::create([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'description' => $this->description,
            'language_id' => $this->language_id,
            'status' => $this->status,
            'game_category' => $this->game_category,
            'game_type' => $this->game_type,
            'is_featured' => $this->is_featured,
            'release_date' => $this->released_date,
            'volatility' => $this->volatility,
            'rtp' => $this->rtp,
            'maximum_win' => $this->maximum_win,
            'region' => $this->region,
            'theme' => $this->theme,
            'image' => $this->image,
        ]);

        $this->dispatch('created');
    }

    public function render()
    {

        $languages = Language::all();

        return view('livewire.admin.game.game-create', [
            'languages' => $languages
        ])->extends('layouts.admin.app')->section('contents');
    }
}
