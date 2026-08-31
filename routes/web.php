<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});