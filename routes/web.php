<?php

use App\Livewire\Pages\Products\Create;
use App\Livewire\Pages\Products\Update;
use App\Livewire\Pages\ProductsList;
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

    Route::get('/products', ProductsList::class)->name('products');
    Route::get('/products/create', Create::class)->name('products.create');
    Route::get('/products/{product}/update', Update::class)->name('products.update');
});


