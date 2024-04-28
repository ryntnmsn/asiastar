<?php

namespace App\Livewire\Admin\Provider;

use App\Models\Provider;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ProviderEdit extends Component
{
    use WithFileUploads;

    public $id;
    public $title;
    public $old_image;
    public $new_image;

    public function mount($id) {
        $provider = Provider::where('id', $id)->first();
        $this->id = $provider->id;
        $this->title = $provider->title;
        $this->old_image = $provider->image;
    }

    public function update() {

        $this->validate([
            'title' => 'required|max:255',
        ]);

        $provider = Provider::where('id', $this->id)->first();

        $image = '';
        if($this->new_image != null) {
            $image = $this->new_image->store('providers', 'public');
        } else {
            $image = $this->old_image;
        }

        $provider->update([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'image' => $image,
        ]);
    }


    public function render()
    {
        return view('livewire.admin.provider.provider-edit')
        ->extends('layouts.admin.app')->section('contents');;
    }
}
