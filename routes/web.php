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

// Route::middleware(['middleware' => ['role:admin']], function(){

// });

// Route::middleware(['middleware' => ['role:admin']], function(){

// });

require __DIR__.'/auth.php';
