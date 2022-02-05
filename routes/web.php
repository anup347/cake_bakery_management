<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cake\CakeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Cake\OrderController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('home');
})->name('home');

Route::get('/order/{cake}', [OrderController::class, 'index'])->name('orders.index');// order form
Route::post('/order/{cake}', [OrderController::class, 'cakeOrder']);//saves the cake 

Route::get('/myorder', [OrderController::class, 'showUserOrder'])->name('orders.myorder');/// show all user order
Route::get('/myorder/{order}', [OrderController::class, 'fetchThisOrder'])->name('orders.show');/// show all user order



Route::get('/cakes/add', [CakeController::class, 'addCake'])->name('cakes.addcake');
Route::post('/cakes/add', [CakeController::class, 'store']);
Route::get('/cakes/{cake}', [CakeController::class, 'show'])->name('cakes.show');
Route::get('/cakes', [CakeController::class, 'index'])->name('cakes.index');

Route::post('/logout', [LogoutController::class, 'index'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'userLogin']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
/*
Route::get('/cakes', function () {
    return view('cakes.index');
})->name('cakes');
*/