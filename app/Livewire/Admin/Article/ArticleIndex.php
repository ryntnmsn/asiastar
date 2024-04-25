<?php

namespace App\Livewire\Admin\Article;

use Livewire\Component;

class ArticleIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.article.article-index')
            ->extends('layouts.admin.app')->section('contents');
    }
}