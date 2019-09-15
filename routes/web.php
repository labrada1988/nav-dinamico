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


Route::view('/', 'link1')       ->name('link1');
Route::view('/link2', 'link2')  ->name('link2');
Route::view('/link3', 'link3')  ->name('link3');
Route::view('/link4', 'link4')  ->name('link4');
Route::view('/link5', 'link5')  ->name('link5');


