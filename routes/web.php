<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UpdateUserController;
use App\Http\Controllers\CreateFileController;
use App\Http\Controllers\ListFilesController;
use App\Http\Controllers\PlannerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login-page');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register-page');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/update-user', [UpdateUserController::class, 'index'])->name('update-user-page');
Route::post('/update-user', [UpdateUserController::class, 'update'])->name('update-user');

Route::get('/create-file', [CreateFileController::class, 'index'])->name('create-file-page');
Route::post('/create-file', [CreateFileController::class, 'create'])->name('create-file');

Route::get('/list-files', [ListFilesController::class, 'index'])->name('list-files-page');

Route::get('/planner', [PlannerController::class, 'index'])->name('planner-page');

Route::get('/create-planner', [PlannerController::class, 'create'])->name('create-planner-page');
Route::post('/create-planner', [PlannerController::class, 'register'])->name('create-planner');