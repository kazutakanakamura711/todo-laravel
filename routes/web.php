<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    TaskController,
    HomeController,
};

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

Route::get('/', function () {
    return view('welcome');
});

Route::
get('/tasks',[TaskController::class, 'index'])->name('tasks');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/task', [TaskController::class, 'store'])->name('task');
Route::delete('/task/{task}', [TaskController::class, 'destroy'])->name('/task/{task}');
