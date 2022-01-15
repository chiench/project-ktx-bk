<?php

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
    return view('welcome');
})->name('home');

Route::get('/dash', function () {
    return view('dash');
})->name('dash');


Route::resource('students','StudentController');
Route::resource('managers','ManagerController');
Route::resource('rooms','RoomController');


Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/register', function () {
    return view('register');
})->name('register');
