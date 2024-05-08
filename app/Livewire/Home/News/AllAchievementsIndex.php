<?php

namespace App\Livewire\Home\News;

use App\Models\Article;
use Livewire\Component;

class AllAchievementsIndex extends Component
{
    public $amount = 20;

    public function loadMore() {
        // $companyNews = Article::where('status', true)->get();
        // dd($companyNews);
        $this->amount += 12;
    }

    public function render()
    {
        $achievements = Article::where('status', true)
            ->where('category', 'achievements')
            ->orderBy('created_at', 'desc')
            ->take($this->amount);

        return view('livewire.home.news.all-achievements-index', [
            'achievements' => $achievements->get()
        ])->extends('layouts.home.app')->section('contents');
    }
}
