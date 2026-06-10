<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user', function () {
    return Inertia::render('User/Show');
});

Route::get('/user', [UserController::class, 'show']);