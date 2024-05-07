<?php

namespace App\Livewire\Admin\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class ArticleIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $id;
    public $sort = 'asc';
    public $search = '';

    public function delete($id) {
        $articles = Article::where('id', $id)->first();
        $this->id = $articles->id;
    }

    public function destroy() {
        $articles = Article::where('id', $this->id)->first();
        $articles->delete();

        $this->js('window.location.reload');
    }

    public function clone($id) {
        $article = Article::where('id', $id)->first();

        $clone = $article->replicate();

        $clone->save();
    }

    public function render()
    {

        $articles = Article::with('article_category')
        ->when($this->search, function ($query) {
            return $query->where('name', 'LIKE', '%' . $this->search . '%');
        })
        ->when($this->sort, function ($query) {
            return $query->orderBy('name', $this->sort);
        });

        return view('livewire.admin.article.article-index', [
            'articles' => $articles->paginate(20)
        ])->extends('layouts.admin.app')->section('contents');
    }
}
