<?php

namespace App\Livewire\Home\News;

use App\Models\Article;
use Livewire\Component;

class SingleNews extends Component
{
    public $slug;
    public $title;
    public $description;
    public $image;
    public $created_at;
    public $category;

    public function mount($slug) {
        $news = Article::where('slug', $slug)->first();
        $this->slug = $news->slug;
        $this->title = $news->name;
        $this->description = $news->description;
        $this->image = $news->image;
        $this->category = $news->category;
        $this->created_at = $news->created_at;
    }

    public function render()
    {

        $lang = app()->getLocale();

        $relatedNews = Article::where('status', true)
        ->where('category', $this->category)
        ->where('slug', '!=', $this->slug)
        ->whereHas('language', function($query) use ($lang) {
        $query->where('code', $lang);
        })
        ->inRandomOrder()
        ->limit(4);

        return view('livewire.home.news.single-news', [
            'relatedNews' => $relatedNews->get()
        ])->extends('layouts.home.app')->section('contents');
    }
}
