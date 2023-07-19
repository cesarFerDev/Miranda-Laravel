<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
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

Route::get('/home', [RoomController::class, 'home']);

Route::get('/about', function() {
    return view('about');
});

Route::get('/rooms', [RoomController::class, 'rooms']);

Route::get('/room/{id}', [RoomController::class, 'roomDetails']);
Route::post('/room/{id}', [BookingController::class, 'store']);

Route::get('/offers', [RoomController::class, 'offers']);

Route::get('/contact', function() {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'store']);



Route::middleware('auth')->group(function () {
    Route::get('/orders', [OrderController::class, 'index'])->name('orders');

    Route::post('/orders/create', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');

    Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.delete');
    Route::get('/orders/{id}', [OrderController::class, 'edit'])->name('orders.edit');
    Route::patch('/orders/{id}', [OrderController::class, 'update'])->name('orders.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
