<?php

namespace App\Livewire\Admin\Recruitment;

use App\Models\Language;
use App\Models\Recruitment;
use Livewire\Component;
use Illuminate\Support\Str;

class RecruitmentEdit extends Component
{

    public $id;
    public $name;
    public $description;
    public $language_id;
    public $status = false;

    public function mount($id) {
        $recruitment = Recruitment::where('id', $id)->first();
        $this->id = $recruitment->id;
        $this->name = $recruitment->name;
        $this->description = $recruitment->description;
        $this->status = $recruitment->status;
        $this->language_id = $recruitment->language_id;
    }

    public function update() {

        $validate_array = [
            'name' => 'required',
            'description' => 'required',
            'language_id' => 'required',
        ];

        $this->validate($validate_array);
        $recruitment = Recruitment::where('id', $this->id)->first();

        $recruitment->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'description' => $this->description,
            'status' => $this->status,
            'language_id' => $this->language_id,
        ]);

        $this->dispatch('updated');
    }

    public function render()
    {
        $languages = Language::all();


        return view('livewire.admin.recruitment.recruitment-edit', [
            'languages' => $languages
        ])->extends('layouts.admin.app')->section('contents');
    }
}
