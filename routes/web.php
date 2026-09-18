<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
});
Route::view('/about', 'web.navbar.about')->name('about');
Route::view('/chancellor', 'web.navbar.chancellor')->name('chancellor');
Route::view('/director', 'web.navbar.director')->name('director');
Route::view('/co-ordinator', 'web.navbar.ordinator')->name('ordinator');
Route::view('/faculty', 'web.navbar.faculty')->name('faculty');
Route::view('/contact', 'web.navbar.contact')->name('contact');
Route::view('/gallery', 'web.navbar.gallery')->name('gallery');

Route::view('/ranchi-university', 'web.navbar..university.index')->name('university');