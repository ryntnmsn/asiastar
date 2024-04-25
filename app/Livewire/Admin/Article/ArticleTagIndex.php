<?php

namespace App\Livewire\Admin\Article;

use App\Models\ArticleTag;
use Livewire\Component;
use Livewire\WithPagination;

class ArticleTagIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $id;
    public $sort = 'asc';
    public $search = '';

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

        $articleTags = ArticleTag::when($this->search, function ($query) {
            return $query->where('name', 'LIKE', '%' . $this->search . '%');
        })
        ->when($this->sort, function ($query) {
            return $query->orderBy('name', $this->sort);
        });

        return view('livewire.admin.article.article-tag-index', [
            'articleTags' => $articleTags->paginate(20)
        ])->extends('layouts.admin.app')->section('contents');;
    }
}
