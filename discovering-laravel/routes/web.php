<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\Controller\PageController;


/*
|--------------------------------------------------------------------------
| Web Routes: 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Routes are your url endpoints eg homepage, about page, contact page, etc
*/

// go to resources/views/welcome.blade.php

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Type in browser
// http://127.0.0.1:8000/greeting
// http://localhost/discovering-laravel/discovering-laravel/public/greeting
Route::get('/greeting', function () {
    return 'Hello World';
});

// Remove function
// Route::get('/about', function () {
//     return view('about');
// });

// ERROR
// removed controller, and instead tell the route where it should go 
// Route::get('/about','PageController@about');
Route::get('/about', [PageController::class, 'about']);

// go to controller, then views

// use App\Http\Controllers\UserController;

// Route::get('/user', [UserController::class, 'index']);

// Route::get('/user', [UserController::class, 'user']);

// this works !!!
// Route::get('/user', [\App\Http\Controllers\Controller::class, 'user']);

// Type in browser: http://localhost/discovering-laravel/discovering-laravel/public/user
Route::get('/user', [Controller::class, 'user']);

// use controller instead to call the view
// Route::get('/home', function () {
//     return view('home', ['name' => 'Anna']);
// });

Route::get('/home', [Controller::class, 'home']);

Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::post('/contact', [Controller::class, 'submitContact']);
// can do a patch, put, delete requests

// Named Routes