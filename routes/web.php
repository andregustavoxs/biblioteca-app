<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.template');
});

Route::resource('publishers', PublisherController::class);
Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);

Route::get('books/{book}/destroy-image', [BookController::class, 'destroyImage'])->name('books.destroy-image');
