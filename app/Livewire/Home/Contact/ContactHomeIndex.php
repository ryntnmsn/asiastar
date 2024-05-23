<?php

namespace App\Livewire\Home\Contact;

use App\Models\Contact;
use Livewire\Component;

class ContactHomeIndex extends Component
{
    public function render()
    {
        $contacts = Contact::where('status', true);
        
        return view('livewire.home.contact.contact-home-index', [
            'contacts' => $contacts->get()
        ])->extends('layouts.home.app')->section('contents');
    }
}
