<?php

namespace App\Livewire\Admin\Language;

use App\Models\Language;
use Livewire\Component;

class LanguageIndex extends Component
{
    public function render()
    {
        $languages = Language::all();

        return view('livewire.admin.language.language-index', [
            'languages' => $languages
        ])->extends('layouts.admin.app')->section('contents');
    }
}
