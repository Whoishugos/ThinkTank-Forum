<?php

use App\Http\Controllers\Main\DiscussionController;
use App\Http\Controllers\Main\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('discussions', [DiscussionController::class, 'index'])->name('discussions');
