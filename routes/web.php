<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Room_statusController;
use App\Http\Controllers\Room_typeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;

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

// ::post, ::post, ::patch, ::delete

Route::resource('guests', GuestController::class);
Route::resource('payments', PaymentController::class);
Route::resource('reservations', ReservationController::class);
Route::resource('roles', RoleController::class);
Route::resource('room_statuses', Room_statusController::class);
Route::resource('room_types', Room_typeController::class);
Route::resource('rooms', RoomController::class);
Route::resource('users', UserController::class);