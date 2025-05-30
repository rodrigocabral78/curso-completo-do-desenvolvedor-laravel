<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return 'Olá, Mundo!';
});

Route::get('/sobre', function () {
    return 'Sobre nós';
});
Route::get('/contato', function () {
    return 'Entre em contato';
});
