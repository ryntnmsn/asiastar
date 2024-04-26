<?php

namespace App\Livewire\Admin\Article;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Language;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


class ArticleCreate extends Component
{
    use WithFileUploads;

    public $name;
    public $short_description;
    public $description;
    public $language_id = '';
    public $article_category_id = '';
    public $status = false;
    public $image;

    protected $rules = [
        'name' => 'required|unique:articles',
        'short_description' => 'required',
        'description' => 'required',
        'language_id' => 'required',
        'article_category_id' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,png',
    ];

    public function store() {
        $this->validate();
        Article::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'short_description' => $this->short_description,
            'description' => $this->description,
            'language_id' => $this->language_id,
            'article_category_id' => $this->article_category_id,
            'status' => $this->status,
            'image' => $this->image->store('articles', 'public')
        ]);

        $this->dispatch('created');

        // $this->js('window.location.reload()');

    }

    public function render()
    {
        $languages = Language::all();
        $articleCategories = ArticleCategory::with('article_category')->get();

        return view('livewire.admin.article.article-create', [
            'languages' => $languages,
            'articleCategories' => $articleCategories
        ])->extends('layouts.admin.app')->section('contents');;
    }
}
