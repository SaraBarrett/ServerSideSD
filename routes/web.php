<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// rota home
Route::get('/home', function(){
    return view('home');
})->name('home');


// rotas users
//rota para no futuro carregar uma tabela com todos os users
Route::get('/users', function(){
    return view('users.all_users');
})->name('users.show');

Route::get('/add-users', function(){
    return view('users.add_users');
})->name('users.add');



//rota com paramentros
Route::get('/hello/{name}', function($name){
    return '<h1>Hello</h1>'.$name;
});

//rota fallback: cai aqui quando não encontra nenhuma rota com o url solicitado no frontend
Route::fallback(function(){
    return view('fallback');
});






//Notas:
//os nomes das rotas servem para se identificar as mesmas dentro do código com uma "key", como por exemplo para chamar no href
