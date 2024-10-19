<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;

Route::get('', [LoginController::class, 'loginPage'])->name('loginPage');

Route::get('sign_up', [SignUpController::class, 'signUpPage'])->name('signUpPage');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::post('store-data', [SignUpController::class, 'store'])->name('storeData');

Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('new-task', [TaskController::class, 'newTaskPage'])->name('newTaskPage');

Route::post('add-task', [TaskController::class, 'add'])->name('add_task');

Route::get('tasks', [TaskController::class, 'tasks'])->name('tasks');

Route::patch('/tasks/{id}/is_completed', [TaskController::class, 'updateStatus'])->name('task.updateStatus');

Route::get('edit-page/{slug}', [TaskController::class, 'editTaskPage'])->name('editTask');

Route::put('action-edit/{id}', [TaskController::class, 'update'])->name('task.updateAll');

Route::delete('tasks/{id}', [TaskController::class, 'delete'])->name('task.delete');
