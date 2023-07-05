<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;

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
    return view('contact', ['error' => '', 'posted' => false]);
});

Route::post('/contact', [ContactController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});

