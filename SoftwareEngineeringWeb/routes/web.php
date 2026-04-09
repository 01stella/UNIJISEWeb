<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/home/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/home/curriculum', function () {
    return view('curriculum', ['title' => 'Curriculum']);
});

Route::get('/home/research', function () {
    return view('research', ['title' => 'Research']);
});


// Legacy paths kept for existing links/bookmarks.
Route::redirect('/about', '/home/about');
Route::redirect('/curriculum', '/home/curriculum');
Route::redirect('/research', '/home/research');