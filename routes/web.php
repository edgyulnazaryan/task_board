<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/task', [TaskController::class, 'index'])->middleware('auth');
Route::get('/task/create/{id}', [TaskController::class, 'create'])->name('new_task')->middleware('auth');
Route::post('/task/create/{id}/submit', [TaskController::class, 'store'])->name('task_create');
Route::get('/task/show/{id}', [TaskController::class, 'show'])->name('task_show');

Route::post('/check/{id}', [TaskController::class, 'action']);
Route::get('/edit/{id}', [TaskController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [TaskController::class, 'update'])->name('task_edit');
Route::post('/check/remove/{id}', [TaskController::class, 'remove']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
