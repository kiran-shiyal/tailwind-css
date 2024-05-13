<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/practice1', function () {
    return view('practice1');
});

Route::get('/practice2', function () {
    return view('practice2');
});
Route::get('/practice3', function () {
    return view('practice3');
});

Route::get('/flex', function () {
    return view('flex');
});
Route::get('/grid', function () {
    return view('grid');
});

Route::get('/practice4', function () {
    return view('practice4');
});
Route::get('/font', function () {
    return view('font');
});
Route::get('/practice5', function () {
    return view('practice5');
});
Route::get('/bg', function () {
    return view('background');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/animation', function () {
    return view('animation');
});
Route::get('/practice6', function () {
    return view('practice6');
});
Route::get('/practice7', function () {
    return view('practice7');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/user_list', function () {
    return view('user_list');
});
