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
    return view('welcome');
});

Route::get('/melissa', function () {
    return view('melissa');
});
Route::get('/aaron', function () {
    return view('aaron');
});


Route::get('/steven', function () {
    return view('steven');
});
Route::get('/sally', function () {
    return view('sally');
});
