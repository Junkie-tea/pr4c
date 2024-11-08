<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\RegController;

Route::get('/', [StoryController::class, 'index'])->name('story');
Route::post('/create', [StoryController::class, 'create'])->name('create');
Route::post('/create_user', [RegController::class, 'create_user'])->name('create_user');
Route::get('/for_log', [StoryController::class, 'index2'])->name('story.log');
