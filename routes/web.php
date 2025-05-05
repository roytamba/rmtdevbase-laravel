<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('portfolio.page'); })->name('welcome');
Route::get('/resume', function () { return view('portfolio.resume'); })->name('resume');