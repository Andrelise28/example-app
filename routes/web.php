<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

Route::get('/user/{nome}', [UserController::class, 'index']);

