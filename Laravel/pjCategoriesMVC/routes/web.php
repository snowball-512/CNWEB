<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DocumentController;
use App\Models\Category;
use App\Models\Book;
use App\Models\Document;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('categories', CategoryController::class);
Route::resource('books', BookController::class);
Route::resource('documents', DocumentController::class);