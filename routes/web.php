<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ExpertController;
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

Route::get('/', function () {
    return view('chichaven');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::resource('experts', ExpertController::class);
Route::resource('clients', ClientController::class);
Route::resource('articles', ArticleController::class);
Route::resource('orders', OrderController::class);
Route::resource('appointments', AppointmentController::class);
