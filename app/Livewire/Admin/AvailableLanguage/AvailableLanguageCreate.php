<?php

namespace App\Livewire\Admin\AvailableLanguage;

use App\Models\AvailableLanguage;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AvailableLanguageCreate extends Component
{

    use WithFileUploads;

    public $name;
    public $image;

    public function store() {
        $this->validate([
            'name' => 'required|max:255|unique:available_languages',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:64|dimensions:min_width=100,min_height=60,max_width=100,max_height=60'
        ]);

        AvailableLanguage::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'image' => $this->image->store('available-language', 'public')
        ]);

        $this->dispatch('created');
    }

    public function render()
    {
        return view('livewire.admin.available-language.available-language-create')
        ->extends('layouts.admin.app')->section('contents');
    }
}
