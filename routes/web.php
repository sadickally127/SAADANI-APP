<?php

use App\Models\JobList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['greeting'=> 'Hello, We are making attempts to chek the effectivenes of using particular arrays to display particular information that we are interested with.']);

});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});