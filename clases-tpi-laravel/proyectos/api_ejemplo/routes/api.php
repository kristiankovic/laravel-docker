<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// sanctum le dice que tiene que mandar un token
Route::middleware('auth:sanctum')->group(function () {
 
Route::get('/users', [AuthController::class, 'getAllUser'])->name('users.index');
 Route::post('/logout',[AuthController::class, 'logout'])->name('auth.logout');
});