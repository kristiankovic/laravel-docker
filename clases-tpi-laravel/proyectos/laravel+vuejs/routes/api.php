<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/* php artisan route:list */

//Route::resource('tasks', TaskController::class)->only(['index', 'store', 'update', 'destroy']);

/*
-----------------------
-OTRA FORMA DE HACERLO-
-----------------------

Route::post('/tasks', [TaskController::class, 'store']);
Route::get('/tasks', [TaskController::class, 'index']);
Route::put('/tasks/{task}', [TaskController::class, 'update']);
Route::delete('/tasks/{task}', [TaskController::class, 'delete']);
*/