<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\TrackController;
use \App\Http\Controllers\CommentController;
use \App\Http\Controllers\ActualityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*CLIENT*/


Route::get('/', [ActualityController::class,'newsHomePage'])
    ->name('home');
Route::get('/', [TrackController::class,'tracksHomePage'])
    ->name('home');

Route::view('/About', 'about')
    ->name('about');

Route::get('/Jukebox', [TrackController::class,'listeJukeboxPage'])
    ->name('jukebox');

Route::get('/News', [ActualityController::class,'listeNewsPage'])
    ->name('news');
Route::get('actuality/{actuality}/show',['\App\Http\Controllers\ActualityController', 'show'])
    ->name('actuality.show');


Route::view('/Contact', 'contact')
    ->name('contact');


/*ADMIN*/
Route::resource('category', CategoryController::class);
Route::delete('category{category}/force', ['\App\Http\Controllers\CategoryController', 'forceDestroy'])
    ->name('category.force-destroy');
Route::put('category/{category}/restore', ['\App\Http\Controllers\CategoryController', 'restore'])
    ->name('category.restore');

Route::resource('track', TrackController::class);
Route::delete('track{track}/force', ['\App\Http\Controllers\TrackController', 'forceDestroy'])
    ->name('track.force-destroy');
Route::put('track/{track}/restore', ['\App\Http\Controllers\TrackController', 'restore'])
    ->name('track.restore');

Route::resource('comment', CommentController::class);
Route::delete('comment{comment}/force', ['\App\Http\Controllers\CommentController', 'forceDestroy'])
    ->name('comment.force-destroy');
Route::put('comment/{comment}/restore', ['\App\Http\Controllers\CommentController', 'restore'])
    ->name('comment.restore');

Route::resource('actuality', ActualityController::class);
Route::get('actuality/{actuality}/show',['\App\Http\Controllers\ActualityController', 'show'])
    ->name('actuality.show');
Route::delete('actuality{actuality}/force', ['\App\Http\Controllers\ActualityController', 'forceDestroy'])
    ->name('actuality.force-destroy');
Route::put('actuality/{actuality}/restore', ['\App\Http\Controllers\ActualityController', 'restore'])
    ->name('actuality.restore');

