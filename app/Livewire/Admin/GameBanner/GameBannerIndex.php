<?php

namespace App\Livewire\Admin\GameBanner;

use App\Models\GameBanner;
use Livewire\Component;

class GameBannerIndex extends Component
{
    public $id;

    public function delete($id) {
        $gameBanner = GameBanner::where('id', $id)->first();
        $this->id = $gameBanner->id;
    }

    public function destroy() {
        $gameBanner = GameBanner::where('id', $this->id)->first();
        $gameBanner->delete();

        $this->js('window.location.reload');
    }

    public function render()
    {
        $gameBanners = GameBanner::paginate(20);

        return view('livewire.admin.game-banner.game-banner-index', [
            'gameBanners' => $gameBanners
        ])->extends('layouts.admin.app')->section('contents');
    }
}
