<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Page\Home;

Route::get('/', Home::class)->name('home');


