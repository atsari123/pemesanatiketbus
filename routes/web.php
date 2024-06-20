<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::post('/store-booking', [BookingController::class, 'store'])->name('store.booking');

Route::get('/home', function () {
    return view('home');
}) ->name('home');

Route::get('/booking', function () {
    return view('booking');
}) ->name('booking');

Route::get('/packages', function () {
    return view('packages');
}) ->name('packages');

Route::get('/services', function () {
    return view('services');
}) ->name('services');

Route::get('/gallery', function () {
    return view('gallery');
}) ->name('gallery');

Route::get('/about', function () {
    return view('about');
}) ->name('about');
