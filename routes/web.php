<?php

use Illuminate\Support\Facades\Route;



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/product/details', function () {
    return view('product.details');
})->name('product.details');


Route::get('/product/create', function () {
    return view('product.create');
})->name('product.create');


Route::get('/product/return', function () {
    return view('product.return');
})->name('product.return');


Route::get('/online_request/index', function () {
    return view('online_request.index');
})->name('online_request.index');