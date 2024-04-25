<?php

namespace App\Livewire\Admin\Article;

use Livewire\Component;

class ArticleCreate extends Component
{
    public function render()
    {
        return view('livewire.admin.article.article-create')
        ->extends('layouts.admin.app')->section('contents');;
    }
}
