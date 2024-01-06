<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;





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

// Route::get('/home', HomeController::class);

// Route::get('/about', [AboutController::class, 'index'])->name('about');

// Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Route::get('/download', [ImageController::class, 'download'])->name('download');

// Route::get('/success', function(){
//     return '<h1>image uploaded successfully</h1>';
// })->name('success');

Route::get('posts/trash', [PostController::class, 'trashed'])->name('posts.trashed');
Route::get('posts/{id}/restore', [PostController::class, 'restore'])->name('posts.restored');


Route::resource('posts', PostController::class);

// Route::get('/login', [LoginController::class, 'index'])->name('login');

// Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');

// Route::post('upload-file', [ImageController::class, 'handleImage'])->name('upload-file');




Route::fallback(function(){
    return "Route doesnt exists!";
});
