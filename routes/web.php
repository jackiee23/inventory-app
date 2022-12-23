<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IitemController;
use App\Http\Controllers\OitemController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('index', [
        'title' => 'Dashboard'
    ]);
});

Route::resource('/stuff', StuffController::class);

Route::resource('/customer', CustomerController::class);

Route::resource('/oitem', OitemController::class);

Route::resource('/iitem', IitemController::class);

Route::resource('/user', UserController::class);




