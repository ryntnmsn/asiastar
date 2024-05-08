<?php

namespace App\Livewire\Home\News;

use App\Models\Article;
use Livewire\Component;

class NewsIndex extends Component
{
    public function render()
    {
        $articles = Article::where('status', true);
        $companyNews = $articles->where('category', 'company_news')->orderBy('created_at', 'desc')->limit(3)->get();
        $latestNews = $articles->where('category', 'company_news')->orderBy('created_at', 'desc')->limit(4)->get();
        $achievements = Article::where('status', true)->where('category', 'achievements')->limit(8)->get();

        return view('livewire.home.news.news-index', [
            'companyNews' => $companyNews,
            'achievements' => $achievements,
            'latestNews' => $latestNews
        ])->extends('layouts.home.app')->section('contents');
    }
}
