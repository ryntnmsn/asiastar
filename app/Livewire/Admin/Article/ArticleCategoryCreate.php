<?php

namespace App\Livewire\Admin\Article;

use App\Models\ArticleCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class ArticleCategoryCreate extends Component
{
    public $name;

    protected $rules = [
        'name' => 'required|max:255'
    ];

    public function store() {
        $this->validate();
        ArticleCategory::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name)
        ]);
        
        $this->dispatch('created');
    }

    public function render()
    {
        return view('livewire.admin.article.article-category-create')
            ->extends('layouts.admin.app')->section('contents');;
    }
}
