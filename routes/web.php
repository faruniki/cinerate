<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;

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


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});



//route admin
Route::get('admin/review', [AdminController::class, 'review'])->name('adminReview');
Route::post('admin/deleteReview/{id}', [AdminController::class, 'deleteReview'])->name('deleteReview');

//route movies
Route::get('/movies',[MovieController::class, 'movie'])->name('movies');

Route::get('admin/movies', [MovieController::class, 'index'])->name('adminMovies');
Route::get('admin/createMovie', [MovieController::class, 'createMovie'])->name('createMovie');
Route::post('admin/storemovie', [MovieController::class, 'storeMovie'])->name('storeMovie');
Route::get('admin/editMovie/{id}', [MovieController::class, 'editMovie'])->name('editMovie');
Route::post('admin/updateMovie/{id}', [MovieController::class, 'updateMovie'])->name('updateMovie');
Route::post('admin/deleteMovie/{id}', [MovieController::class, 'deleteMovie'])->name('deleteMovie');

//route review
Route::get('/review', [ReviewController::class, 'index'])->name('review');
Route::post('/postReview', [ReviewController::class, 'createReview'])->name('postReview');

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

//route logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');