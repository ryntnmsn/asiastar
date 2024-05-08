<?php

namespace App\Livewire\Home\Joinus;

use App\Models\Recruitment;
use Livewire\Component;

class JoinUsIndex extends Component
{
    public function render()
    {

        $recruitments = Recruitment::where('status', true)->get();

        return view('livewire.home.joinus.join-us-index', [
            'recruitments' => $recruitments
        ])->extends('layouts.home.app')->section('contents');
    }
}
