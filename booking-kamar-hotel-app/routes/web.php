<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OwnerController;

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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login-processing');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout-processing');

Route::group(['middleware' => ['auth', 'role:kasir', 'authDisableBack']], function(){
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/order/{productId}', [MainController::class, 'order'])->name('order');
    Route::post('/order/{productId}', [MainController::class, 'orderProcessing'])->name('order-processing');
    Route::get('/detail-transaction/{transaksiId}', [MainController::class, 'detailTransaction'])->name('detail-transaction');
    Route::get('/history-transactions', [MainController::class, 'historyTransaction'])->name('history-transaction');
});

Route::group(['middleware' => ['auth', 'role:owner', 'authDisableBack']], function(){
    Route::get('/owner-page', [OwnerController::class, 'index'])->name('owner-home');
});

Route::group(['middleware' => ['auth', 'role:admin', 'authDisableBack']], function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin-home');
    Route::get('/add-room', [AdminController::class, 'addRoom'])->name('add-room');
    Route::post('/add-room', [AdminController::class, 'addRoomProcessing'])->name('add-room-processing');
    Route::get('/delete-room/{productId}', [AdminController::class, 'deleteRoom'])->name('delete-room-processing');
});