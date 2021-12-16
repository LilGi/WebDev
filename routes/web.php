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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('qr', function () {
    return view('user.qr');
})->middleware(['auth'])->name('qr');

Route::get('account-settings', function () {
    return view('user.account-settings');
})->middleware(['auth'])->name('account-settings');

Route::get('home', function () {
    return view('user.home');
})->middleware(['auth'])->name('home');

Route::get('own-logs', function () {
    return view('user.own-logs');
})->middleware(['auth'])->name('own-logs');



Route::get('change-password', function () {
    return view('user.change-password');
})->middleware(['auth'])->name('change-password');

Route::get('delete/{user}', function () {
    return view('admin.delete');
})->middleware(['auth'])->name('admin.delete');



Route::get('main', function () {
    return view('layouts.main');
})->middleware(['auth'])->name('main');



Route::resource('users', App\Http\Controllers\Auth\RegisteredUserController::class);



require __DIR__.'/auth.php';



//route::get('users-index', [App\Http\Controllers\Auth\RegisteredUserController::class, 'index'])->name('users.index');
