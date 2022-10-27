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

Route::get('/', [TaskController::class, "show"])->name("front-page");

Route::get('/add-task', function(){
    return view("pages.add");
})->name('add');

Route::post('/insert', [TaskController::class, "insert"])->name('insert');
Route::get('edit/{id}', [TaskController::class, "edit"])->name('edit');
Route::post('update/{id}', [TaskController::class, "update"])->name('update');
Route::get('delete/{id}', [TaskController::class, "delete"])->name('delete');
Route::get('done/{id}', [TaskController::class, "done"])->name('done');
