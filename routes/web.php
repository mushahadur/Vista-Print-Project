<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\Admin\PostController;
use App\Http\Controllers\Backend\Admin\UserController;
use App\Http\Controllers\Backend\Admin\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/dashboard', function () {
    return view('backend.pages.home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route For User Resource Controller
    Route::resource('/user', UserController::class);

    // Route For Post Resource Controller
    Route::resource('/post', PostController::class);

    // Route For Category Resource Controller
    Route::resource('/category', CategoryController::class);
});

require __DIR__.'/auth.php';
