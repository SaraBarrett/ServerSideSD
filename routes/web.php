<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// rota home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// rotas users
//rota para no futuro carregar uma tabela com todos os users
Route::get('/users', [UserController:: class, 'allUsers'])->name('users.show');

Route::get('/add-users', [UserController:: class, 'addUsers'])->name('users.add');


//rota com paramentros
Route::get('/hello/{name}', function($name){
    return '<h1>Hello</h1>'.$name;
});

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.all');

//rota fallback: cai aqui quando não encontra nenhuma rota com o url solicitado no frontend
Route::fallback(function(){
    return view('fallback');
});






//Notas:
//os nomes das rotas servem para se identificar as mesmas dentro do código com uma "key", como por exemplo para chamar no href

//rotas de aprendizagem
//chama directamente a função inserir user na bd
//Route::get('/insert-user', [UserController:: class, 'insertUserIntoDB'])->name('users.insert');
