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

Route::get('/login','RegisterController@loginform');
Route::get('/logout','RegisterController@logout');
Route::post('/log','RegisterController@login');
Route::get('/signup','RegisterController@showProfile');
Route::post('/create','RegisterController@insert');
Route::get('/register','RegisterController@showProfile');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');
Route::get("/email", 'HomeController@sendmail'); 
Route::get('mail/send', 'MailController@send');
