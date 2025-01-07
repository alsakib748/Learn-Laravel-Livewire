<?php

use App\Livewire\Feed;
use App\Livewire\Navigate;
use App\Livewire\Terms;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/index',function(){
    return view('index');
});

Route::get('/navigate',Navigate::class)->name('navigate');
Route::get('/feed',Feed::class)->name('feed');
Route::get('/terms',Terms::class)->name('terms');

