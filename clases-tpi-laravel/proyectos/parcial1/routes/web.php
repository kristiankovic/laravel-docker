<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

#Route::get('/', function () {
#    return view('welcome');
#});

Route::get('/', [HomeController::class, 'index']);

Route::controller(HomeController::class)->group(function() {
    
    Route::get('/principales','principales')->name('personajes_principales');
    Route::get('/villanos', 'villanos')->name('villanos');
    Route::get('/amigos','amigos')->name('amigos');
    Route::get('/secundarios', 'secundarios')->name('personajes_secundarios');
});