<?php

namespace App\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;

class ContactCreate extends Component
{

    public $title;
    public $type = '';
    public $status;

    public function store() {
        $this->validate([
            'title' => 'required|max:255|unique:contacts',
            'type' => 'required',
        ]);

        Contact::create([
            'title' => $this->title,
            'type' =>  $this->type,
            'status' =>  $this->status,
        ]);

        $this->dispatch('created');
    }

    public function render()
    {
        return view('livewire.admin.contact.contact-create')
        ->extends('layouts.admin.app')->section('contents');
    }
}
