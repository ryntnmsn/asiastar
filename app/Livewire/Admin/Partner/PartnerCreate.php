<?php

namespace App\Livewire\Admin\Partner;

use App\Models\Partner;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class PartnerCreate extends Component
{

    use WithFileUploads;

    public $title;
    public $image;
    public $status = false;

    public function store() {
        $this->validate([
            'title' => 'required|max:255|unique:providers',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:256|dimensions:min_width=350,min_height=350,max_width=350,max_height=350'
        ]);

        Partner::create([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'status' => $this->status,
            'image' => $this->image->store('partners', 'public')
        ]);

        $this->dispatch('created');
    }

    public function render()
    {
        return view('livewire.admin.partner.partner-create')
        ->extends('layouts.admin.app')->section('contents');
    }
}
