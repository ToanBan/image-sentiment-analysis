<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadImageController;
Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/uploadimage', [UploadImageController::class, 'index'])->name('uploadimage');
Route::post('/uploadimage', [UploadImageController::class, 'analyze']);