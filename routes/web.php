<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MovieController;

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

Route::get('/home', function () {
    return view('user.home');
});

Route::get('/movies', function () {
    return view('user.movies');
});

Route::get('/review', function () {
    return view('user.review');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/comment', function () {
    return view('admin.comment');
});


//route movies
Route::get('admin/movies', [MovieController::class, 'index'])->name('adminMovies');
Route::get('admin/createMovie', [MovieController::class, 'createMovie'])->name('createMovie');
Route::post('admin/storemovie', [MovieController::class, 'storeMovie'])->name('storeMovie');
Route::get('admin/editMovie/{id}', [MovieController::class, 'editMovie'])->name('editMovie');
Route::post('admin/updateMovie/{id}', [MovieController::class, 'updateMovie'])->name('updateMovie');
Route::post('admin/deleteMovie/{id}', [MovieController::class, 'deleteMovie'])->name('deleteMovie');


//route user
Route::get('/users', [AdminController::class, 'user'])->name('user');
Route::get('/editUser/{id}', [AdminController::class, 'editUser'])->name('editUser');
Route::post('/updateUser/{id}', [AdminController::class, 'updateUser'])->name('updateUser');
Route::post('/deleteUser/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser');



//route register
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/storeRegister', [RegisterController::class, 'storeRegister'])->name('storeRegister');

//route login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/storeLogin', [LoginController::class, 'storeLogin'])->name('storeLogin');