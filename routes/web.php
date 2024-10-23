<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('product', function () {
    return view('product');
})->name('product');



Route::get('product2', function () {
    return view('product2');
})->name('product2');