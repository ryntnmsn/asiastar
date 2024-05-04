<?php

namespace App\Livewire\Admin\AvailableLanguage;

use App\Models\AvailableLanguage;
use Livewire\Component;

class AvailableLanguageIndex extends Component
{

    public $id;
    public $search = '';
    public $sort = '';

    public function delete($id) {
        $availableLanguage = AvailableLanguage::where('id', $id)->first();
        $this->id = $availableLanguage->id;
    }

    public function destroy() {
        $availableLanguage = AvailableLanguage::where('id', $this->id)->first();
        $availableLanguage->delete();

        $this->js('window.location.reload');
    }

    public function render()
    {

        $availableLanguages = AvailableLanguage::when($this->search, function ($query) {
            return $query->where('name', 'LIKE', '%' . $this->search . '%');
        })
        ->when($this->sort, function ($query) {
            return $query->orderBy('name', $this->sort);
        })->orderBy('created_at', 'desc');

        return view('livewire.admin.available-language.available-language-index', [
            'availableLanguages' => $availableLanguages->paginate(20)
        ])->extends('layouts.admin.app')->section('contents');
    }
}
