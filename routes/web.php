<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;

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

//Route for Member

Route::view('memberregister', 'member.memberregister')->name('member.register');
Route::post('memberregistration', [UserController::class, 'memberRegistration']);
Route::get('membersetting', [UserController::class, 'setting'])->name('member.manage');
Route::get('/member/edit/{id}', [UserController::class, 'edit'])->name('member.edit');
Route::post('/member/updated/{id}', [UserController::class, 'update'])->name('member.update');
Route::get('/member/delete/{id}', [UserController::class, 'delete']);

//Router for Books

Route::view('bookregister', 'book.register')->name('book.register');
Route::post('bookegistration', [BookController::class, 'bookRegistration']);
Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::post('/book/updated/{id}', [BookController::class, 'update'])->name('book.update');
Route::get('/book/delete/{id}', [BookController::class, 'delete']);

//Router for Issue

Route::get('issuebook',[BookController::class, 'issueBook']);
Route::get('issuedbook', [BookController::class, 'issuedBook']);
Route::post('issued', [BookController::class, 'bookIssued']);
Route::get('/book/returned/{name}', [BookController::class, 'updateStatus']);

//search
Route::get('search', [BookController::class, 'search']);
