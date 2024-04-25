<?php

namespace App\Livewire\Admin\Article;

use App\Models\ArticleTag;
use Livewire\Component;

class ArticleTagIndex extends Component
{

    public $id;

    public function delete($id) {
        $articleTag = ArticleTag::where('id', $id)->first();
        $this->id = $articleTag->id;
    }

    public function destroy() {
        $articleTag = ArticleTag::where('id', $this->id)->first();
        $articleTag->delete();

        $this->js('window.location.reload');
    }

    public function render()
    {

        $articleTags = ArticleTag::all();

        return view('livewire.admin.article.article-tag-index', [
            'articleTags' => $articleTags
        ])->extends('layouts.admin.app')->section('contents');;
    }
}
