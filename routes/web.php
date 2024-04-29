<?php

use App\Http\Controllers\LocaleController;
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
use App\Livewire\Admin\Game\GameCreate;
use App\Livewire\Admin\Game\GameEdit;
use App\Livewire\Admin\Game\GameIndex;
use App\Livewire\Admin\GameBanner\GameBannerCreate;
use App\Livewire\Admin\GameBanner\GameBannerEdit;
use App\Livewire\Admin\GameBanner\GameBannerIndex;
use App\Livewire\Admin\Language\LanguageCreate;
use App\Livewire\Admin\Language\LanguageEdit;
use App\Livewire\Admin\Language\LanguageIndex;
use App\Livewire\Admin\Partner\PartnerCreate;
use App\Livewire\Admin\Partner\PartnerEdit;
use App\Livewire\Admin\Partner\PartnerIndex;
use App\Livewire\Admin\Provider\ProviderCreate;
use App\Livewire\Admin\Provider\ProviderEdit;
use App\Livewire\Admin\Provider\ProviderIndex;
use App\Livewire\Auth\Login;
use App\Livewire\Home\Game\GameHomeIndex;
use App\Livewire\Home\HomeIndex;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/locale/{lang}',[LocaleController::class,'setLocale']);

Route::get('/', HomeIndex::class)->name('home.index');
Route::get('/games', GameHomeIndex::class)->name('game.home.index');

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

        //Games
        Route::get('/game', GameIndex::class)->name('game.index');
        Route::get('/game/create', GameCreate::class)->name('game.create');
        Route::get('/game/edit/{id}', GameEdit::class)->name('game.edit');

        //Game Banners
        Route::get('/game/banner', GameBannerIndex::class)->name('game.banner.index');
        Route::get('/game/banner/create', GameBannerCreate::class)->name('game.banner.create');
        Route::get('/game/banner/edit/{id}', GameBannerEdit::class)->name('game.banner.edit');

        //Providers
        Route::get('/game/provider', ProviderIndex::class)->name('game.provider.index');
        Route::get('/game/provider/create', ProviderCreate::class)->name('game.provider.create');
        Route::get('/game/provider/edit/{id}', ProviderEdit::class)->name('game.provider.edit');

        //Partners
        Route::get('/partner', PartnerIndex::class)->name('partner.index');
        Route::get('/partner/create', PartnerCreate::class)->name('partner.create');
        Route::get('/partner/edit/{id}', PartnerEdit::class)->name('partner.edit');

    });
});
