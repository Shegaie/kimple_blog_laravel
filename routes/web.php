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

Route::get('/', 'pages_controller@getIndex');
Route::get('/account', 'pages_controller@createAccount');
Route::get('/accountCreated', 'pages_controller@getAccount');
Route::get('/login', 'pages_controller@getLogin');
Route::get('/profil', 'pages_controller@profil');
Route::get('/failedLogin', 'pages_controller@failedLogin');
Route::get('/writeArticle', 'pages_controller@writeArticle');
