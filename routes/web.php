<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyPlaceController;

use App\Http\Controllers\practics\ContactController;
use App\Http\Controllers\practics\MusicController;
use App\Http\Controllers\practics\GalleryController;
use App\Http\Controllers\practics\PicturesController;
use App\Http\Controllers\practics\SlidersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mypage', [MyPlaceController::class, 'index']);

//some routes for test
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/music', [MusicController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/pictures', [PicturesController::class, 'home']);
Route::get('/sliders', [SlidersController::class, 'index']);
