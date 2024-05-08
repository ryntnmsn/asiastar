<?php

namespace App\Livewire\Home\News;

use App\Models\Article;
use Livewire\Component;

class AllNewsIndex extends Component
{

    public $amount = 20;

    public function loadMore() {
        // $companyNews = Article::where('status', true)->get();
        // dd($companyNews);
        $this->amount += 12;
    }

    public function render()
    {
        $companyNews = Article::where('status', true)
            ->where('category', 'company_news')
            ->orderBy('created_at', 'desc')
            ->take($this->amount);

        return view('livewire.home.news.all-news-index', [
            'companyNews' => $companyNews->get()
        ])->extends('layouts.home.app')->section('contents');
    }
}
