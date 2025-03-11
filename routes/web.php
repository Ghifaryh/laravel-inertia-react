<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     sleep(1);
//     return Inertia::render('Home');
// });


// Route::get('/about', function () {
//     return inertia('About/About'); // didalam folder about
// });

Route::get('/', [PostController::class, 'index']);

Route::resource('posts', PostController::class)->except('index');
