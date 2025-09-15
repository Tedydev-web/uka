<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Page\Home;
use App\Livewire\Page\TongQuan;
use App\Livewire\Page\TuyenSinh;

Route::get('/', Home::class)->name('home');
Route::get('/tong-quan', TongQuan::class)->name('tong-quan');
Route::get('/tuyen-sinh', TuyenSinh::class)->name('tuyen-sinh');
