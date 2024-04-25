<?php

namespace App\Livewire\Admin\Article;

use Livewire\Component;

class ArticleTagCreate extends Component
{
    public function render()
    {
        return view('livewire.admin.article.article-tag-create')
        ->extends('layouts.admin.app')->section('contents');;
    }
}
