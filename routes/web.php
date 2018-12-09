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

Route::get('/', 'Site@home');
Route::get('/listing', 'Site@listing');
Route::get('/single', 'Site@single');
Route::get('/stories', 'Site@stories');
Route::get('/profile', 'Site@profile');
Route::get('/profile/ranjan', 'Site@userProfile');
Route::get('/giveaway', 'Site@giveaway');