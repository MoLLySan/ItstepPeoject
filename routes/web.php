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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Products','ProductController@index')->name('products');
Route::post('/createProduct','ProductController@createProduct')->name('prodCreate');
Route::get('/delProduct','ProductController@delProduct')->name('proddel');
Route::get('/product/{product}/show','ProductController@productMore')->name('more');


