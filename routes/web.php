<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Page\Home;
use App\Livewire\Page\TongQuan;

Route::get('/', Home::class)->name('home');
Route::get('/tong-quan', TongQuan::class)->name('tong-quan');

