<?php

use App\Livewire\Dashboard;
use App\Livewire\Hotels\HotelList;
use App\Livewire\Hotels\HotelEdit;
use App\Livewire\Hotels\HotelCreate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/hotels', HotelList::class)->name('hotels.index');
    Route::get('/hotels/create', HotelCreate::class)->name('hotels.create');
    Route::get('/hotels/{id}/edit', HotelEdit::class)->name('hotels.edit');
});

require __DIR__.'/auth.php';
