<?php

namespace App\Livewire\Home\Companynews;

use App\Models\Article;
use Livewire\Component;

class SingleCompanyNews extends Component
{

    public $title;
    public $description;
    public $image;
    public $created_at;

    public function mount($slug) {
        $news = Article::where('slug', $slug)->first();
        $this->title = $news->name;
        $this->description = $news->description;
        $this->image = $news->image;
        $this->created_at = $news->created_at;
    }

    public function render()
    {
        return view('livewire.home.companynews.single-company-news')
        ->extends('layouts.admin.app')->section('contents');
    }
}
