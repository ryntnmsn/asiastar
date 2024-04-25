<?php

namespace App\Livewire\Admin\Article;

use App\Models\ArticleCategory;
use Livewire\Component;

class ArticleCategoryIndex extends Component
{

    public $id;

    public function delete($id) {
        $articleCategory = ArticleCategory::where('id', $id)->first();
        $this->id = $articleCategory->id;
    }

    public function destroy() {
        $articleCategory = ArticleCategory::where('id', $this->id)->first();
        $articleCategory->delete();

        $this->js('window.location.reload');
    }

    public function render()
    {

        $articleCategories = ArticleCategory::all();

        return view('livewire.admin.article.article-category-index', [
            'articleCategories' => $articleCategories
        ])->extends('layouts.admin.app')->section('contents');;
    }
}
