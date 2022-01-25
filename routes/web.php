<?php
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home')); //8.1.1

Route::view('contact', 'contact');

Route::view('posts/first-post', 'post.show');

Route::get('profile', function() {
    $name = "Nathan";
    return view('profile', [
       'name' => $name,
    ]);
});
