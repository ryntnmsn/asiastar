<?php

namespace App\Livewire\Home\News;

use App\Models\Article;
use Livewire\Component;

class NewsIndex extends Component
{
    public function render()
    {

        $lang = app()->getLocale();

        $articles = Article::where('status', true)->whereHas('language', function($query) use ($lang) {
            $query->where('code', $lang);
        });
        $companyNews = $articles->where('category', 'company_news')->orderBy('created_at', 'desc')->limit(6)->get();
        $latestNews = $articles->where('category', 'company_news')->orderBy('created_at', 'desc')->limit(6)->get();

        $achievements = Article::where('status', true)
            ->whereHas('language', function($query) use ($lang) {
                $query->where('code', $lang);
            })
            ->where('category', 'achievements')
            ->limit(6)
            ->get();

        return view('livewire.home.news.news-index', [
            'companyNews' => $companyNews,
            'achievements' => $achievements,
            'latestNews' => $latestNews
        ])->extends('layouts.home.app')->section('contents');
    }
}
