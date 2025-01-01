<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front-end.welcome');
})->name('home');


// Services pages
Route::get('services', function () {
    return view('front-end.services.service');
})->name('services');

Route::get('services/detail', function () {
    return view('front-end.services.service-detail');
})->name('service.detail');



// product pages
Route::get('product', function () {
    return view('front-end.products.product');
})->name('product');

Route::get('product/product-detail', function () {
    return view('front-end.products.product-details');
})->name('product.detail');

Route::get('cart', function () {
    return view('front-end.products.cart');
})->name('cart');

Route::get('checkout', function () {
    return view('front-end.products.checkout');
})->name('checkout');

// Blogs pages
Route::get('blogs', function () {
    return view('front-end.blogs.blogs');
})->name('blogs');

Route::get('blogs/detail', function () {
    return view('front-end.blogs.blog-detail');
})->name('blog.detail');

// Pages
Route::get('appointment', function () {
    return view('front-end.appointment');
})->name('appointment');

Route::get('gallery', function () {
    return view('front-end.gallery');
})->name('gallery');

Route::get('about', function () {
    return view('front-end.about');
})->name('about');

Route::get('contact', function () {
    return view('front-end.contact');
})->name('contact');

Route::get('team', function () {
    return view('front-end.team.team');
})->name('team');

Route::get('team/detail', function () {
    return view('front-end.team.team-detail');
})->name('team.detail');

Route::get('join-team', function () {
    return view('front-end.team.join-team');
})->name('join-team');

// Error and coming soon pages
Route::get('404', function () {
    return view('front-end.404');
});

Route::get('coming-soon', function () {
    return view('front-end.coming-soon');
})->name('coming-soon');
