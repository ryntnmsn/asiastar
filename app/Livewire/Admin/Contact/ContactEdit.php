<?php

namespace App\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;

class ContactEdit extends Component
{

    public $id;
    public $title;
    public $type = '';
    public $status = false;

    public function mount($id) {
        $contact = Contact::where('id', $id)->first();
        $this->id = $contact->id;
        $this->title = $contact->title;
        $this->type = $contact->type;
        $this->status = $contact->status;

    }

    public function update() {

        $this->validate([
            'title' => 'required|max:255',
            'type' => 'required',
        ]);

        $contact = Contact::where('id', $this->id)->first();

        $contact->update([
            'title' => $this->title,
            'type' =>  $this->type,
            'status' =>  $this->status,
        ]);

        $this->dispatch('updated');
    }


    public function render()
    {
        return view('livewire.admin.contact.contact-edit')
        ->extends('layouts.admin.app')->section('contents');
    }
}
