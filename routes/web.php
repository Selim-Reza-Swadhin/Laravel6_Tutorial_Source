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


Route::get('/', 'SiteControllerTemplate@index')->name('index');
Route::get('/about', 'SiteControllerTemplate@about')->name('about');
Route::get('/about/us', 'SiteControllerTemplate@aboutus')->name('aboutus');
Route::get('/aboutstar/any', 'SiteControllerTemplate@aboutstar')->name('aboutstar');
Route::get('/service', 'SiteControllerTemplate@service')->name('service');
Route::get('/contact', 'SiteControllerTemplate@contact')->name('contact');