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
        $relatedNews = Article::where('status', true)->where('category', $this->category)->where('id', '!=', $this->slug)->inRandomOrder()->limit(4)->get();

        return view('livewire.home.news.single-news', [
            'relatedNews' => $relatedNews
        ])->extends('layouts.home.app')->section('contents');
    }
}
