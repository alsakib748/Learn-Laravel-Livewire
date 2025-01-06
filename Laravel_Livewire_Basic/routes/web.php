<?php

use App\Livewire\LazyLoading;
use App\Livewire\MultipleFileUpload;
use App\Livewire\SimpleForm;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.layouts.app');
})->name('home');

Route::get('/form', SimpleForm::class)->name('form');

Route::get('/lazy', LazyLoading::class)->name('lazy');

Route::get('/multiple-upload', MultipleFileUpload::class)->name('multiple.upload');
