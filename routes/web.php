<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return "<a href=". route('users.show')." >Clica aqui para veres todos os users</a>";
})->name('home');

Route::get('/users', function(){
    return '<h1>Aqui vês todos os users</h1>';
})->name('users.show');

Route::get('/hello/{name}', function($name){
    return '<h1>Hello</h1>'.$name;
});

Route::fallback(function(){
    return "<a href=". route('home')." >estás perdido volta aqui</a>";
});
