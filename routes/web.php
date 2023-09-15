<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login');

Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'registerPost'])->name('register');
Route::get('/', [HomeController::class, 'home'])->name('home');


Route::get('/products', [ProductController::class, 'products'])->name('products');


Route::get('/admin', [AdminController::class, 'adminHome'])->name('admin');

Route::get('/user', [UserController::class, 'userhome'])->name('user');
Route::get('/shop', [UserController::class, 'usershop'])->name('shop');
