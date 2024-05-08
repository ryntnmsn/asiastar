<?php

namespace App\Livewire\Home\Partner;

use App\Models\Partner;
use Livewire\Component;

class PartnerHomeIndex extends Component
{
    public function render()
    {

        $partners = Partner::where('status', true)->get();

        return view('livewire.home.partner.partner-home-index', [
            'partners' => $partners
        ])->extends('layouts.home.app')->section('contents');
    }
}
