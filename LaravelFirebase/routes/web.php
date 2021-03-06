<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class, 'index']);
Route::post('/add-student', [StudentController::class, 'addStudent']);
Route::post('/add-student', [StudentController::class, 'store']);

Route::get('edit-student/{id}', [StudentController::class, 'editStudent']);
Route::put('update-student/{id}', [StudentController::class, 'updateStudent']);

Route::get('delete-student/{id}', [StudentController::class, 'deleteStudent']);