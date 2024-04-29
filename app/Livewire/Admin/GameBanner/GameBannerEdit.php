<?php

namespace App\Livewire\Admin\GameBanner;

use App\Models\GameBanner;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class GameBannerEdit extends Component
{

    use WithFileUploads;

    public $id;
    public $status = false;
    public $old_image;
    public $new_image;

    public function mount($id) {
        $gameBanner = GameBanner::where('id', $id)->first();
        $this->id = $gameBanner->id;
        $this->status = $gameBanner->status;
        $this->old_image = $gameBanner->image;
    }

    public function update() {

        if(isset($this->new_image)){
            $this->validate([
                'new_image' => 'required|image|mimes:png,jpg,jpeg|max:256|dimensions:min_width=1920,min_height=480,max_width=1920,max_height=480'
            ]);
        }

        $gameBanner = GameBanner::where('id', $this->id)->first();

        $image = '';
        if($this->new_image != null) {
            $image = $this->new_image->store('partners', 'public');
        } else {
            $image = $this->old_image;
        }

        $gameBanner->update([
            'status' => $this->status,
            'image' => $image,
        ]);

        $this->dispatch('updated');
    }

    public function render()
    {
        return view('livewire.admin.game-banner.game-banner-edit')
        ->extends('layouts.admin.app')->section('contents');
    }
}
