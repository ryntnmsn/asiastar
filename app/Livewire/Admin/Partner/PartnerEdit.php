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
    public $description;
    public $website;
    public $address;
    public $license;
    public $status = false;
    public $old_image;
    public $new_image;

    public function mount($id) {
        $partner = Partner::where('id', $id)->first();
        $this->id = $partner->id;
        $this->title = $partner->title;
        $this->website = $partner->website;
        $this->address = $partner->address;
        $this->license = $partner->license;
        $this->status = $partner->status;
        $this->description = $partner->description;
        $this->old_image = $partner->image;
    }

    public function update() {

        if(isset($this->new_image)){
            $validate_array = [
                'title' => 'required|max:255',
                'new_image' => 'required|image|mimes:png,jpg,jpeg|max:256|dimensions:min_width=420,min_height=420,max_width=420,max_height=420'
            ];
        } else {
            $validate_array = [
                'title' => 'required|max:255',
            ];
        }

        $this->validate($validate_array);

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
            'description' => $this->description,
            'status' => $this->status,
            'website' => $this->website,
            'address' => $this->address,
            'license' => $this->license,
            'image' => $image,
        ]);

        $this->dispatch('updated');
    }

    public function render()
    {
        return view('livewire.admin.partner.partner-edit')->extends('layouts.admin.app')->section('contents');
    }
}
