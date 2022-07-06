<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'home'])->name('home');

//new task routes
Route::get('/new_task',[MainController::class, 'new_task'])->name('new_task');
Route::post('/new_task_submit',[MainController::class, 'new_task_submit'])->name('new_task_submit');

//tasks routes
Route::get('/task_done/{id}', [MainController::class, 'task_done'])->name('task_done');
Route::get('/task_undone/{id}', [MainController::class, 'task_undone'])->name('task_undone');

//edit task routes
Route::get('/edit_task/{id}',[MainController::class, 'edit_task'])->name('edit_task');
Route::post('/edit_task_submit',[MainController::class, 'edit_task_submit'])->name('edit_task_submit');