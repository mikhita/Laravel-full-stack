<?php

use Illuminate\Support\Facades\Route;

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

Route::get('home', function () {
    $blogs = [
        [
            'title' => 'title one',
            'body' => 'this is a body',
            'status' => 1 
        ],
        [
            'title' => 'title two',
            'body' => 'this is a body',
            'status' => 0 
        ],
        [
            'title' => 'title three',
            'body' => 'this is a body',
            'status' => 1
        ],
        [
            'title' => 'title four',
            'body' => 'this is a body',
            'status' => 1  
        ]
    ];
    return view('home', compact('blogs'));
});

Route::get('about', function() {
    $about = "About Page"; 
    $about2 = "About Page 2";
    return view('about.index', compact('about', 'about2'));
})->name('about');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');



Route::group(['prefix' => 'costumer'], function() {
    Route::get('/', function(){
        return "<h1>Costumer List</h1>";
    });
    Route::get('/show', function(){
        return "<h1>Costumeer Show</h1>";
    });
    Route::get('/create', function(){
        return "<h1>Costumer Create</h1>";
    });
});

Route::fallback(function(){
    return "Route doesnt exists!";
});