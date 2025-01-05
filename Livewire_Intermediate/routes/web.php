<?php

use App\Livewire\ContactUs;
use App\Livewire\HomePage;
use App\Livewire\UsersPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);

Route::get('/users', UsersPage::class);

Route::get('/contact-us',ContactUs::class);
