<?php

use Illuminate\Support\Facades\Route;
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
    return view('entry.logIn');
});
Route::get('/login', function () {
    
    return view('entry.logIn');
});
Route::view('register', 'entry.registration');
Route::post('registration', [UserController::class, 'registration']);

