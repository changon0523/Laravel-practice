<?php

use App\Http\Controllers\TaskController;

Route::get('/folders/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');

Route::get('/', function () {
    return view('welcome');
});