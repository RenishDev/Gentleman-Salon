<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin-home', function () {
    return view('admin.dashboard');
})->name('admin.home');

Route::get('/admin-calender', function () {
    return view('admin.calender');
})->name('admin.calender');