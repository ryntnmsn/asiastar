<?php

use App\Livewire\Admin\Dashboard\DashboardIndex;
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
        Route::get('/dashboard', DashboardIndex::class)->name('dashboard.index');
    });
});