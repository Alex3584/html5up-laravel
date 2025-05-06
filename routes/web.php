<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/generic', [PageController::class, 'generic'])->name('generic');
Route::get('/elements', [PageController::class, 'elements'])->name('elements');
