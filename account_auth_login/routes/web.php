<?php

use App\Http\Controllers\AuthManager;
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

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post'); //API route Login

Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post'); //API route Register

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

//Them dieu kien xac nhan account da dang nhap moi cho truy cap route nay
Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', function () {
        return "Hello Tôi Là Con Gà";
    });
});
