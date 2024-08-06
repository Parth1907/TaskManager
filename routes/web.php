<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use Illuminate\Console\View\Components\Task;

Route::get('/', [TaskController::class, 'index']);
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/create', [TaskController::class, 'create']);
Route::post('/tasks/create', [TaskController::class, 'store']);
Route::get('/tasks/{taskId}/edit', [TaskController::class, 'edit']);
Route::put('/tasks/{taskId}/edit', [TaskController::class, 'update']);
Route::delete('/tasks/{taskId}/delete', [TaskController::class, 'destroy']);
