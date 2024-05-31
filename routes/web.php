<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.template');
});

Route::resource('publishers', PublisherController::class);
Route::resource('authors', AuthorController::class);
