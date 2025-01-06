<?php

use App\Livewire\HomePage;
use App\Livewire\ContactUs;
use App\Livewire\UsersPage;
use App\Livewire\MultipleFileUpload;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);

Route::get('/users', UsersPage::class);

Route::get('/contact-us',ContactUs::class);

Route::get('/multiple-upload', MultipleFileUpload::class)->name('multiple.upload');
