<?php

namespace App\Livewire\Admin\Theme;

use App\Models\Theme;
use Livewire\Component;
use Illuminate\Support\Str;

class ThemeEdit extends Component
{

    public $id;
    public $name;

    public function mount($id) {
        $theme = Theme::where('id', $id)->first();
        $this->id = $theme->id;
        $this->name = $theme->name;
    }

    public function update() {

        $this->validate([
            'name' => 'required|max:255'
        ]);

        $theme = Theme::where('id', $this->id)->first();

        $theme->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);

        $this->dispatch('updated');
    }

    public function render()
    {
        return view('livewire.admin.theme.theme-edit')
        ->extends('layouts.admin.app')->section('contents');
    }
}
