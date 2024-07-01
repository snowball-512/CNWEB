<?php

use App\Http\Controllers\FlowerController;
use App\Models\Flower;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('flowers', FlowerController::class);