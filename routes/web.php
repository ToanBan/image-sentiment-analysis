<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\ImageProcessingController;
Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/uploadimage', [UploadImageController::class, 'index'])->name('uploadimage');
Route::post('/uploadimage', [UploadImageController::class, 'analyze']);
Route::get('/results', [ImageProcessingController::class, 'historyanalyze']);
Route::get('/results/{id}', [ImageProcessingController::class, 'show']);
