<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.home', ['nama' => 'mayudi']);
});
Route::get('/home', function () {
    return view('home');
});
