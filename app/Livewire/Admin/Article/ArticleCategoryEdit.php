<?php

namespace App\Livewire\Admin\Article;

use App\Models\ArticleCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class ArticleCategoryEdit extends Component
{

    public $id;
    public $name;

    protected $rules = [
        'name' => 'required|max:255'
    ];

    public function update() {
        $this->validate();
        $articleCategory = ArticleCategory::where('id', $this->id)->first();
        $articleCategory->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name)
        ]);

        $this->dispatch('updated');
    }

    public function mount($id) {
        $articleCategory = ArticleCategory::where('id', $id)->first();
        $this->name = $articleCategory->name;
        $this->id = $articleCategory->id;
    }

    public function render()
    {
        return view('livewire.admin.article.article-category-edit')
        ->extends('layouts.admin.app')->section('contents');;
    }
}
