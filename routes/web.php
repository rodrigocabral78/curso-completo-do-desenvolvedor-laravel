<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePageController::class.'@index');

Route::get('/sobre', AboutController::class.'@index');

Route::get('/contato', ContactController::class.'@index');
