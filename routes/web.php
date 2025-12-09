<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/second-page', function () {
//     return view('second');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('post/{post}', [PostController::class, 'show'])->name('post.show');

Route::view('/about', 'about')->name('about');
Route::view('/contact-us', 'contact')->name('contact');

Route::view('/article', 'article');
