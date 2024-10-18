<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.home', ['nama' => 'mayudi']);
});
Route::get('/admin', function () {
    return view('admin.home');
});
Route::get('/admin/setting', function () {
    return view('admin.setting');
});
Route::get('/admin/blog', function () {
    return view('admin.blog');
});
// Route::get('/home', function () {
//     return view('home');
// });
