<?php

namespace App\Livewire\Admin\GameBanner;

use App\Models\GameBanner;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class GameBannerCreate extends Component
{
    use WithFileUploads;

    public $image;
    public $status = false;

    public function store() {
        $this->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:256|dimensions:min_width=1920,min_height=480,max_width=1920,max_height=480'
        ]);

        GameBanner::create([
            'status' => $this->status,
            'image' => $this->image->store('banners', 'public')
        ]);

        $this->dispatch('created');
    }

    public function render()
    {
        return view('livewire.admin.game-banner.game-banner-create')
        ->extends('layouts.admin.app')->section('contents');
    }
}
