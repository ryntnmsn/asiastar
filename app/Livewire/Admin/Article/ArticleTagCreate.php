<?php

namespace App\Livewire\Admin\Article;

use App\Models\ArticleTag;
use Illuminate\Support\Str;
use Livewire\Component;

class ArticleTagCreate extends Component
{
    public $name;

    protected $rules = [
        'name' => 'required|max:255'
    ];

    public function store() {
        $this->validate();
        ArticleTag::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name)
        ]);
        
        $this->dispatch('created');
    }

    public function render()
    {
        return view('livewire.admin.article.article-tag-create')
        ->extends('layouts.admin.app')->section('contents');;
    }
}
