<?php

namespace App\Livewire\Admin\Provider;

use App\Models\Provider;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ProviderCreate extends Component
{

    use WithFileUploads;

    public $title;
    public $image;

    public function store() {
        $this->validate([
            'title' => 'required|max:255|unique:providers',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:128|dimensions:min_width=420,min_height=240,max_width=420,max_height=240'
        ]);

        Provider::create([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'image' => $this->image->store('providers', 'public')
        ]);

        $this->dispatch('created');
    }

    public function render()
    {
        return view('livewire.admin.provider.provider-create')
        ->extends('layouts.admin.app')->section('contents');
    }
}
