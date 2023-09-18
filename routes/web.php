<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
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

//Comments for Ruy Embiado 
//Best Regards, Alexander Novo

//Login Controller
Route::get('/login', [LoginController::class, 'login'])->name('login'); //login View
Route::post('/login', [LoginController::class, 'loginPost'])->name('login'); //login Action
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    //Register Controller
    Route::get('/register', [RegisterController::class, 'register'])->name('register'); //register View
    Route::post('/register', [RegisterController::class, 'registerPost'])->name('register'); //register Action

    //Admin Controller
    Route::get('/admin', [AdminController::class, 'adminHome'])->name('admin');

    //User Controller
    Route::get('/user', [UserController::class, 'userhome'])->name('user');

    //Shop Controller
    Route::get('/shop', [ShopController::class, 'usershop'])->name('shop');
    Route::get('/shop/registerShop', [ShopController::class, 'registerShop'])->name('registerShop'); //registerShopView
    Route::post('/shop/registerShopPost', [ShopController::class, 'registerShopPost'])->name('registerShopPost'); //registerShopPost

    //Product Controller
    Route::get('/products', [ProductController::class, 'products'])->name('products');
});

//Home Controller
Route::get('/', [HomeController::class, 'home'])->name('home');
