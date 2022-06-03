<?php

use App\Http\Controllers\TasksController;
use App\Http\Controllers\HomeController;
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

Auth::routes();
Route::group(['prefix' => '', 'middleware' => 'auth'], function () {
    Route::get('/', [TasksController::class, 'index'])->name('tasks.index');
    Route::get('/show/{id}', [TasksController::class, 'show'])->name('tasks.show');
    Route::get('/add', [TasksController::class, 'add'])->name('tasks.add');
    Route::post('/store', [TasksController::class, 'store'])->name('tasks.store');
    Route::get('/edit/{id}', [TasksController::class, 'edit'])->name('tasks.edit');
    Route::post('/update/{id}', [TasksController::class, 'update'])->name('tasks.update');
    Route::post('tasks/delete/{id}', [TasksController::class, 'delete'])->name('tasks.delete');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
