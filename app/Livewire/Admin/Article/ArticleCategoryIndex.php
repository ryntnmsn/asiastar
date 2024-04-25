<?php

namespace App\Livewire\Admin\Article;

use App\Models\ArticleCategory;
use Livewire\Component;
use Livewire\WithPagination;

class ArticleCategoryIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $id;
    public $search = '';
    public $sort = 'asc';

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
        $articleCategories = ArticleCategory::when($this->search, function ($query) {
            return $query->where('name', 'LIKE', '%' . $this->search . '%');
        })
        ->when($this->sort, function ($query) {
            return $query->orderBy('name', $this->sort);
        });

        return view('livewire.admin.article.article-category-index', [
            'articleCategories' => $articleCategories->paginate(20)
        ])->extends('layouts.admin.app')->section('contents');;
    }
}
