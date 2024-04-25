<?php

namespace App\Livewire\Admin\Article;

use App\Models\ArticleTag;
use Livewire\Component;
use Illuminate\Support\Str;

class ArticleTagEdit extends Component
{

    public $id;
    public $name;

    protected $rules = [
        'name' => 'required|max:255'
    ];

    public function update() {
        $this->validate();
        $articleTag = ArticleTag::where('id', $this->id)->first();
        $articleTag->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name)
        ]);

        $this->dispatch('updated');
    }

    public function mount($id) {
        $articleTag = ArticleTag::where('id', $id)->first();
        $this->name = $articleTag->name;
        $this->id = $articleTag->id;
    }

    public function render()
    {
        return view('livewire.admin.article.article-tag-edit')
        ->extends('layouts.admin.app')->section('contents');;
    }
}
