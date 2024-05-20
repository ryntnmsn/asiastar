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
    public $description;
    public $website;
    public $address;
    public $license;
    public $country;
    public $status = false;

    public function store() {
        $this->validate([
            'title' => 'required|max:255|unique:partners',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:128|dimensions:min_width=420,min_height=240,max_width=420,max_height=240',
        ]);

        Partner::create([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'status' => $this->status,
            'description' => $this->description,
            'license' => $this->license,
            'website' => $this->website,
            'address' => $this->address,
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
