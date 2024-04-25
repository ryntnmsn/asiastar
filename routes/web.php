<?php

use App\Livewire\Admin\Article\ArticleCategoryCreate;
use App\Livewire\Admin\Article\ArticleCategoryEdit;
use App\Livewire\Admin\Article\ArticleCategoryIndex;
use App\Livewire\Admin\Article\ArticleCreate;
use App\Livewire\Admin\Article\ArticleEdit;
use App\Livewire\Admin\Article\ArticleIndex;
use App\Livewire\Admin\Article\ArticleTagCreate;
use App\Livewire\Admin\Article\ArticleTagEdit;
use App\Livewire\Admin\Article\ArticleTagIndex;
use App\Livewire\Admin\Dashboard\DashboardIndex;
use App\Livewire\Admin\Language\LanguageCreate;
use App\Livewire\Admin\Language\LanguageEdit;
use App\Livewire\Admin\Language\LanguageIndex;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('redirectIfAuthenticated')->group(function () {
    Route::get('/admin', Login::class)->name('login');
});

//Protected Route
Route::middleware('auth', 'isAdmin')->group(function () {
    Route::group(['prefix' => 'admin'], function () {

        //Dashboard
        Route::get('/dashboard', DashboardIndex::class)->name('dashboard.index');

        //Articles
        Route::get('/article', ArticleIndex::class)->name('article.index');
        Route::get('/article/create', ArticleCreate::class)->name('article.create');
        Route::get('/article/edit/{id}', ArticleEdit::class)->name('article.edit');

        //Articles Categories
        Route::get('/article/category', ArticleCategoryIndex::class)->name('article.category.index');
        Route::get('/article/category/create', ArticleCategoryCreate::class)->name('article.category.create');
        Route::get('/article/category/edit/{id}', ArticleCategoryEdit::class)->name('article.category.edit');

        //Articles Tags
        Route::get('/article/tag', ArticleTagIndex::class)->name('article.tag.index');
        Route::get('/article/tag/create', ArticleTagCreate::class)->name('article.tag.create');
        Route::get('/article/tag/edit/{id}', ArticleTagEdit::class)->name('article.tag.edit');

        //Languages
        Route::get('/language', LanguageIndex::class)->name('language.index');
        Route::get('/language/create', LanguageCreate::class)->name('language.create');
        Route::get('/language/edit/{id}', LanguageEdit::class)->name('language.edit');

    });
});