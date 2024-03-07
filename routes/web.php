<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user/{nome}', [UserController::class, 'index']);

Route::get('/listagem/', [UserController::class, 'listagem']);
