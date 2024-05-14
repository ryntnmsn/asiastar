<?php

namespace App\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    public $id;
    public $search = '';
    public $sort = '';

    public function delete($id) {
        $contact = Contact::where('id', $id)->first();
        $this->id = $contact->id;
    }

    public function destroy() {
        $contact = Contact::where('id', $this->id)->first();
        $contact->delete();

        $this->js('window.location.reload');
    }

    public function render()
    {

        $contacts = Contact::when($this->search, function ($query) {
                return $query->where('title', 'LIKE', '%' . $this->search . '%');
            })
            ->when($this->sort, function ($query) {
                return $query->orderBy('title', $this->sort);
            })->orderBy('created_at', 'desc');

        return view('livewire.admin.contact.contact-index', [
            'contacts' => $contacts->paginate(20)
        ])->extends('layouts.admin.app')->section('contents');
    }
}
