<?php

namespace App\Livewire\Admin\Recruitment;

use App\Models\Language;
use App\Models\Recruitment;
use Livewire\Component;
use Illuminate\Support\Str;


class RecruitmentCreate extends Component
{

    public $name;
    public $description;
    public $status;
    public $language_id;

    protected $rules = [
        'name' => 'required|unique:recruitments',
        'language_id' => 'required',
        'description' => 'required',
    ];

    public function store() {
        $this->validate();

        Recruitment::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'language_id' => $this->language_id,
            'description' => $this->description,
            'status' => $this->status,
        ]);

        $this->dispatch('created');

        // $this->js('window.location.reload()');

    }

    public function render()
    {

        $languages = Language::all();

        return view('livewire.admin.recruitment.recruitment-create', [
            'languages' => $languages
        ])->extends('layouts.admin.app')->section('contents');;
    }
}
