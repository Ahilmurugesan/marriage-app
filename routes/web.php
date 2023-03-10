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
    return view('home');
})->name('home');

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/real-wedding', function () {
    return view('realWedding');
})->name('real-wedding');

Route::get('/real-wedding-single', function () {
    return view('singleRealWedding');
})->name('real-wedding-single');

Route::get('/find-vendor', function () {
    return view('findVendor');
})->name('findVendor');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/blog-detail', function () {
    return view('blogDetail');
})->name('blogDetail');

Route::get('/vendor-detail', function () {
    return view('vendorDetail');
})->name('vendorDetail');
