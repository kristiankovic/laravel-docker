<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function(){

    Route::get('/inicio', 'index')->name('inicio');
    Route::get('/', 'index')->name('inicio');

});

Route::controller(HomeController::class)->group(function() {

    Route::get('/form', 'dataEnviada')->name('sdata');
    Route::post('/show', 'dataRecibida')->name('rdata');
});