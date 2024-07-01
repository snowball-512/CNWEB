<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('students', StudentController::class);
Route::resource('types', TypeController::class);