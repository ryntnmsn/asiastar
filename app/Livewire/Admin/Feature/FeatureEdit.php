<?php

namespace App\Livewire\Admin\Feature;

use App\Models\Feature;
use Livewire\Component;
use Illuminate\Support\Str;

class FeatureEdit extends Component
{

    public $id;
    public $name;

    public function mount($id) {
        $feature = Feature::where('id', $id)->first();
        $this->id = $feature->id;
        $this->name = $feature->name;
    }

    public function update() {

        $this->validate([
            'name' => 'required|max:255'
        ]);

        $feature = Feature::where('id', $this->id)->first();

        $feature->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);

        $this->dispatch('updated');
    }

    public function render()
    {
        return view('livewire.admin.feature.feature-edit')
        ->extends('layouts.admin.app')->section('contents');
    }
}
