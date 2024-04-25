<?php

namespace App\Livewire\Admin\Article;

use Livewire\Component;

class ArticleTagEdit extends Component
{
    public function render()
    {
        return view('livewire.admin.article.article-tag-edit')
        ->extends('layouts.admin.app')->section('contents');;
    }
}
