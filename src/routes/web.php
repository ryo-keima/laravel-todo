<?php

use App\Http\Controllers\TasksController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [TasksController::class, 'index'])->name('tasks.index');

Auth::routes();
Route::group(['prefix' => '', 'middleware' => 'auth'], function () {
    Route::get('/show/{id}', [TasksController::class, 'show'])->name('tasks.show');
    Route::get('/add', [TasksController::class, 'add'])->name('tasks.add');
    Route::post('/store', [TasksController::class, 'store'])->name('tasks.store');
});
