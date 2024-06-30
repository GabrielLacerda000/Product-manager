<?php

use App\Livewire\CreateProduct;
use App\Livewire\Products;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-product', CreateProduct::class);
Route::get('/products', Products::class);