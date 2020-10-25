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
//Route::get('/', function () {
   // return view('pages.index');
//});

Route::get('/', 'pagesController@index');
Route::get('/about', 'pagesController@about');

Route::get('/gallery', 'pagesController@gallery');
Route::get('/events', 'pagesController@events');
Route::get('/news', 'pagesController@news');
Route::get('/login', 'pagesController@login');
Route::get('/register', 'pagesController@register');
Route::get('/profile', 'pagesController@profile');

Route::get('/contact', [
   'uses' => 'contactUsController@createForm'
]);

Route::post('/contact', [
   'uses' => 'contactUsController@contactUsForm',
   'as' => 'contact.store'
]);

Auth::routes();


Route::get('/home', 'HomeController@index');



