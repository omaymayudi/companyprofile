<?php

use App\Http\Controllers;

use Illuminate\Support\Facades\Route;


Route::get('/', [Controllers\HomeController::class, 'index']);

Route::get('/admin', Controllers\DashboardController::class)->name('admin')->middleware('auth');
Route::get('/setting', [Controllers\SettingController::class, 'index'])->name('setting')->middleware('auth');
// Route::get('/admin/user', [Controllers\UserController::class, 'index']);
Route::get('login', [Controllers\LoginController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('logout', Controllers\LogoutController::class)->name('logout')->middleware('auth');
Route::post('login', [Controllers\LoginController::class, 'authenticate']);
Route::get('/user/{id}', [Controllers\UserController::class, 'show'])->name('user')->middleware('auth');
Route::put('/user/update/{id}', [Controllers\UserController::class, 'update'])->middleware('auth');
Route::post('/admin/user/store', [Controllers\UserController::class, 'store'])->middleware('auth');
Route::get(
    '/blog',
    [Controllers\BlogController::class, 'index']
);


// Route::get('/home', function () {
//     return view('home');
// });
