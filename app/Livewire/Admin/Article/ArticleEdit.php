<?php

namespace App\Livewire\Admin\Article;

use Livewire\Component;

class ArticleEdit extends Component
{
    public function render()
    {
        return view('livewire.admin.article.article-edit')
        ->extends('layouts.admin.app')->section('contents');;
    }
}
