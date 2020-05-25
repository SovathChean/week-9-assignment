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
    return view('estate.home');
});
Route::get('/about', function () {
    return view('estate.about');
});
Route::get('/property-grid', function () {
    return view('estate.property-grid');
});
Route::get('/blog-grid', function () {
    return view('estate.blog-grid');
});
Route::get('/property-single', function () {
    return view('estate.property-single');
});
Route::get('/blog-single', function () {
    return view('estate.blog-single');
});
Route::get('/agents-grid', function () {
    return view('estate.agents-grid');
});
Route::get('/agent-single', function () {
    return view('estate.agent-single');
});
Route::get('/contact', function () {
    return view('estate.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
