<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
    return view('entry.logIn');
});
Route::get('/login', function () {
    
    return view('entry.logIn');
});
Route::view('register', 'entry.registration');
Route::post('registration', [UserController::class, 'registration']);
Route::post('/login', [UserController::class, 'logIn']);
Route::get('/admindashboard', [AdminController::class, 'index']);
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
    
});

