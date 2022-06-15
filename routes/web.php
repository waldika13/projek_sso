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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login/azure', [App\Http\Controllers\Auth\LoginController::class, 'redirectToMicrosoft'])->name('login.azure');
Route::get('/login/azure/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);
