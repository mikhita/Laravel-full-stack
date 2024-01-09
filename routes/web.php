<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Models\Post;
// use App\Http\Middleware\CheckCountry;






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

Route::get('/contact', function(){
    $posts = Post::all();
    return view('contact', compact('posts'));
})->name('contact');

Route::get('posts/{id}/restore', [PostController::class, 'restore'])->name('posts.restored');

Route::get('/unavailable', function(){
    return view('unavailable');
})->name('unavailable');

Route::group(['middleware' => 'authCheck'], function(){
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', function(){
        return view('profile');
    })->name('profile');
});


Route::delete('posts/{id}/force-delete', [PostController::class, 'forceDelete'])->name('posts.force-delete');



Route::resource('posts', PostController::class);

// Route::get('/login', [LoginController::class, 'index'])->name('login');

// Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');

// Route::post('upload-file', [ImageController::class, 'handleImage'])->name('upload-file');

Route::get('send-mail', function(){
    // Mail::raw('Hello this is a test mail', function($message){
    //     $message->to('test@gmail.com')->subject('hello from test email');
    // });
    Mail::send(new OrderShipped);

    dd('success');
});



Route::fallback(function(){
    return "Route doesnt exists!";
});
