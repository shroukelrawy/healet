<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index'); })->name('index');
Route::get('blog', function () { return view('blog'); })->name('blog');
Route::get('about', function () { return view('about'); })->name('about');
Route::get('shop', function () { return view('shop'); })->name('shop');