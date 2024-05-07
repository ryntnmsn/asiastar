<?php

namespace App\Livewire\Home\CompanyNews;

use App\Models\Article;
use Livewire\Component;

class CompanyNewsIndex extends Component
{
    public function render()
    {

        $articles = Article::where('status', true);
        $companyNews = $articles->where('category', 'company_news')->orderBy('created_at', 'desc')->limit(3)->get();
        $latestNews = $articles->where('category', 'company_news')->orderBy('created_at', 'desc')->limit(4)->get();
        $achievements = Article::where('status', true)->where('category', 'achievements')->get();

        return view('livewire.home.company-news.company-news-index', [
            'companyNews' => $companyNews,
            'achievements' => $achievements,
            'latestNews' => $latestNews
        ])->extends('layouts.home.app')->section('contents');
    }
}
