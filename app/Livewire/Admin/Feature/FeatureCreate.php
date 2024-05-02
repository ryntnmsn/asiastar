<?php

namespace App\Livewire\Admin\Feature;

use App\Models\Feature;
use Livewire\Component;
use Illuminate\Support\Str;

class FeatureCreate extends Component
{
    public $name;

    public function store() {
        $this->validate([
            'name' => 'required|max:255|unique:features',
        ]);

        Feature::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);

        $this->dispatch('created');
    }

    public function render()
    {
        return view('livewire.admin.feature.feature-create')
        ->extends('layouts.admin.app')->section('contents');
    }
}
