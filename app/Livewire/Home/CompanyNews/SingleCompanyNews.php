<?php

namespace App\Livewire\Home\Companynews;

use App\Models\Article;
use Livewire\Component;

class SingleCompanyNews extends Component
{
    public $id;
    public $title;
    public $description;
    public $image;
    public $created_at;
    public $category;

    public function mount($slug) {
        $news = Article::where('slug', $slug)->first();
        $this->id = $news->id;
        $this->title = $news->name;
        $this->description = $news->description;
        $this->image = $news->image;
        $this->category = $news->category;
        $this->created_at = $news->created_at;
    }

    public function render()
    {
        $relatedNews = Article::where('status', true)->where('category', $this->category)->where('id', '!=', $this->id)->inRandomOrder()->limit(4)->get();

        return view('livewire.home.company-news.single-company-news', [
            'relatedNews' => $relatedNews
        ])->extends('layouts.home.app')->section('contents');
    }
}
