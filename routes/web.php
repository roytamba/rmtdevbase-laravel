<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('portfolio.page'); })->name('welcome');
Route::get('/resume', function () { return view('portfolio.resume'); })->name('resume');
Route::get('/download/my-cv', [PortfolioController::class, 'downloadCv'])->name('download.cv');