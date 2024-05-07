<?php

namespace App\Livewire\Home\About;

use Livewire\Component;

class AboutOurCompany extends Component
{
    public function render()
    {
        return view('livewire.home.about.about-our-company')
        ->extends('layouts.home.app')->section('contents');
    }
}
