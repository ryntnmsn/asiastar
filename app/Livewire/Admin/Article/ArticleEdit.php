<?php

namespace App\Livewire\Admin\Article;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Language;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ArticleEdit extends Component
{
    use WithFileUploads;

    public $id;
    public $name;
    public $short_description;
    public $description;
    public $language_id = '';
    public $article_category_id = '';
    public $status = false;
    public $new_image;
    public $old_image;

    protected $rules = [
        'name' => 'required',
        'short_description' => 'required',
        'description' => 'required',
        'language_id' => 'required',
        'article_category_id' => 'required',
        // 'new_image' => 'image|mimes:jpg,jpeg,png',
    ];

    public function mount($id) {
        $article = Article::where('id', $id)->first();
        $this->id = $article->id;
        $this->name = $article->name;
        $this->short_description = $article->short_description;
        $this->description = $article->description;
        $this->language_id = $article->language_id;
        $this->article_category_id = $article->article_category_id;
        $this->status = $article->status;
        $this->old_image = $article->image;
    }

    public function update() {
        $this->validate();
        $article = Article::where('id', $this->id)->first();

        $image = '';
        if($this->new_image != null) {
            $image = $this->new_image->store('articles', 'public');
        } else {
            $image = $this->old_image;
        }

        $article->update([
            'name' => $this->name,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'language_id' => $this->language_id,
            'article_category_id' => $this->article_category_id,
            'status' => $this->status,
            'image' => $image
        ]);

        $this->dispatch('updated');
    }


    public function render()
    {
        $languages = Language::all();
        $articleCategories = ArticleCategory::all();
        return view('livewire.admin.article.article-edit', [
            'languages' => $languages,
            'articleCategories' => $articleCategories,
        ])->extends('layouts.admin.app')->section('contents');;
    }
}
