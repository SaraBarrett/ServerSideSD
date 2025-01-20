<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/users', function(){
    return view('users.all_users');
})->name('users.show');

Route::get('/hello/{name}', function($name){
    return '<h1>Hello</h1>'.$name;
});

Route::fallback(function(){
    return "<a href=". route('home')." >estás perdido volta aqui</a>";
});
