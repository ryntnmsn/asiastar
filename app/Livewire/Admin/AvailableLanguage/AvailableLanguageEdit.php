<?php

namespace App\Livewire\Admin\AvailableLanguage;

use App\Models\AvailableLanguage;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AvailableLanguageEdit extends Component
{

    use WithFileUploads;

    public $id;
    public $name;
    public $status = false;
    public $old_image;
    public $new_image;

    public function mount($id) {
        $availableLanguage = AvailableLanguage::where('id', $id)->first();
        $this->id = $availableLanguage->id;
        $this->name = $availableLanguage->name;
        $this->old_image = $availableLanguage->image;
    }

    public function update() {

        if(isset($this->new_image)){
            $validate_array = [
                'name' => 'required|max:255',
                'new_image' => 'required|image|mimes:png,jpg,jpeg|max:64|dimensions:min_width=100,min_height=60,max_width=100,max_height=60'
            ];
        } else {
            $validate_array = [
                'name' => 'required|max:255',
            ];
        }

        $this->validate($validate_array);

        $availableLanguage = AvailableLanguage::where('id', $this->id)->first();

        $image = '';
        if($this->new_image != null) {
            $image = $this->new_image->store('available-language', 'public');
        } else {
            $image = $this->old_image;
        }

        $availableLanguage->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'image' => $image,
        ]);

        $this->dispatch('updated');
    }

    public function render()
    {
        return view('livewire.admin.available-language.available-language-edit')->extends('layouts.admin.app')->section('contents');
    }
}
