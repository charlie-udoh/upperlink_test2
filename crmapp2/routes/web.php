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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/customer', 'CustomerController@index');
Route::post('/customer/create', 'CustomerController@store');

Route::get('/group', 'GroupController@index');
Route::post('/group/create', 'GroupController@store');

Route::get('/campaign', 'CampaignController@list');
Route::post('/campaign/create', 'CampaignController@store');

Route::get('auth/google', 'Auth\LoginController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\LoginController@handleProviderCallback');
