<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;

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

// go to resources/views/welcome.blade.php

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// http://127.0.0.1:8000/greeting
// http://localhost/discovering-laravel/discovering-laravel/public/greeting
Route::get('/greeting', function () {
    return 'Hello World';
});

// go to controller, then views

// use App\Http\Controllers\UserController;

// Route::get('/user', [UserController::class, 'index']);

// Route::get('/user', [UserController::class, 'user']);

// this works !!!
// Route::get('/user', [\App\Http\Controllers\Controller::class, 'user']);

Route::get('/user', [Controller::class, 'user']);