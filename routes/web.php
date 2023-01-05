<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\CategoryController;

use App\Http\Controllers\SliderController;

use App\Http\Controllers\BlogController;

use App\Http\Controllers\TagController;


Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/blog-details/{id}', [HomeController::class, 'details'])->name('blog.details');
Route::post('/add-comment', [HomeController::class, 'comment'])->name('add.comment');
Route::post('/add-reply', [HomeController::class, 'addReply'])->name('add.reply');




//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/add-blog', [BlogController::class, 'add'])->name('add.blog');
    Route::post('/store-blog', [BlogController::class, 'store'])->name('blogs.store');
    Route::post('/update-blog/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::post('/delete-blog/{id}', [BlogController::class, 'delete'])->name('blogs.delete');
    Route::get('/manage-blog', [BlogController::class, 'manage'])->name('manage.blog');
    Route::get('/edit-blog/{id}', [BlogController::class, 'edit'])->name('blogs.edit');

    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
    Route::resource('sliders', SliderController::class);
});


