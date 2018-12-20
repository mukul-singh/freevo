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
Route::get('/single/edit', 'Site@editItem');
Route::get('/stories', 'Site@stories');
Route::get('/profile', 'Site@profile');
Route::get('/profile/{username}', 'Site@userProfile');
Route::get('/giveaway', 'Site@giveaway');
Route::get('/post-item', 'Site@postItem');