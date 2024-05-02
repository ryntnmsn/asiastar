<?php

namespace App\Livewire\Admin\Theme;

use App\Models\Theme;
use Livewire\Component;
use Illuminate\Support\Str;

class ThemeCreate extends Component
{
    public $name;

    public function store() {
        $this->validate([
            'name' => 'required|max:255|unique:themes',
        ]);

        Theme::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);

        $this->dispatch('created');
    }

    public function render()
    {
        return view('livewire.admin.theme.theme-create')
        ->extends('layouts.admin.app')->section('contents');
    }
}
