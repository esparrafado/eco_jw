<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/header', function () {
    return view('layouts/header');
});
Route::get('/sobreNos', function () {
    return view('sobreNos');
});