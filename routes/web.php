<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/',\App\Livewire\Front\Klasifikasi::class)->name('home');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');

    Route::view('dashboard','dashboard')->name('dashboard');
});

Route::get('klasifikasi', \App\Livewire\Front\Klasifikasi::class)->name('klasifikasi');
Route::get('dasar-hukum', \App\Livewire\Front\DasarHukum::class)->name('dasar-hukum');

Route::middleware(['role:admin'])->group(function(){
    Route::get('bookmark', \App\Livewire\User\Bookmark::class)->name('bookmark');
});

// Route::middleware(['middleware' => ['role:admin']], function(){

// });

require __DIR__.'/auth.php';
