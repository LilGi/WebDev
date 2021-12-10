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
    return view('layouts.qr');
})->middleware(['auth'])->name('qr');

Route::get('account-settings', function () {
    return view('layouts.account-settings');
})->middleware(['auth'])->name('account-settings');

Route::get('home', function () {
    return view('layouts.home');
})->middleware(['auth'])->name('home');

Route::get('own-logs', function () {
    return view('layouts.own-logs');
})->middleware(['auth'])->name('own-logs');

Route::get('change-password', function () {
    return view('layouts.change-password');
})->middleware(['auth'])->name('change-password');


Route::get('main', function () {
    return view('layouts.main');
})->middleware(['auth'])->name('main');




require __DIR__.'/auth.php';
