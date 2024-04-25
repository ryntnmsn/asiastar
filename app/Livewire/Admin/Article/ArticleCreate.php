<?php

namespace App\Livewire\Admin\Article;

use Livewire\Component;

class ArticleCreate extends Component
{

    public $name;
    public $short_description;
    public $description;
    public $language_id;
    public $article_category_id;
    public $status;
    public $image;

    protected $rules = [
        'name' => 'required|max:255|unique:articles.name',
        'short_description' => 'required',
        'description' => 'required',
        'language_id' => 'required',
        'article_category_id' => 'required',
        'status' => 'required',
        'image' => 'required',
    ];

    public function store() {

    }

    public function render()
    {
        return view('livewire.admin.article.article-create')
        ->extends('layouts.admin.app')->section('contents');;
    }
}
