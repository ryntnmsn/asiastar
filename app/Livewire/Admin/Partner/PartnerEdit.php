<?php

namespace App\Livewire\Admin\Partner;

use App\Models\Partner;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class PartnerEdit extends Component
{

    use WithFileUploads;

    public $id;
    public $title;
    public $status = false;
    public $old_image;
    public $new_image;

    public function mount($id) {
        $partner = Partner::where('id', $id)->first();
        $this->id = $partner->id;
        $this->title = $partner->title;
        $this->status = $partner->status;
        $this->old_image = $partner->image;
    }

    public function update() {

        $this->validate([
            'title' => 'required|max:255',
        ]);

        $partner = Partner::where('id', $this->id)->first();

        $image = '';
        if($this->new_image != null) {
            $image = $this->new_image->store('partners', 'public');
        } else {
            $image = $this->old_image;
        }

        $partner->update([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'status' => $this->status,
            'image' => $image,
        ]);

        $this->dispatch('updated');
    }

    public function render()
    {
        return view('livewire.admin.partner.partner-edit')->extends('layouts.admin.app')->section('contents');
    }
}
