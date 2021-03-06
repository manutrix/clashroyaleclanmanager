<?php

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
    return view('crcm.pages.profile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', function () {
    return view('crcm.pages.profile');
});

Route::get('/clan', function () {
    return view('crcm.pages.clan');
});

Route::get('/chest', function () {
    return view('crcm.pages.chest');
});

Route::get('/settings', function () {
    return view('crcm.pages.settings');
});