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

// Route::get('/', function () {
//     return view('welcome');
// });


//Route::get('/', function () {
//echo 'Test';
//return 'Test Return';
    //return view('welcome2'); //welcome2.blade.php
//});

// Route::get('/about', function(){
// return 'About Page';
// });

// Route::get('about', function(){
// return 'About Page without forward slash';
// });


// Route::get('/services/web', function(){
// return 'Web';
// });

//without folder
// Route::get('/', function () {
//     return view('home'); //home.php
// });

// Route::get('/about', function(){
// //return 'About Page';
// return view('about'); //about.php
// });

//within folder
// Route::get('/', function () {
//     return view('homee.homee'); //homee.php
// });

// Route::get('/about', function(){
// //return 'About Page';
// return view('homee.aboutt'); //aboutt.php
// });


//Controller example SiteController
//Route:: get('/', 'SiteController@index');

//for route
// Route:: get('/', [
// 'uses' => 'SiteController@index',
// //'as' => '/'
// 'as' => 'test'
// ]);

// Route:: get('/aboutrde', [
// 'uses' => 'SiteController@about',
// 'as' => 'about'
// ]);


//for url and URL::to
// Route:: get('/', [
// 'uses' => 'SiteController@index',
// //'as' => '/'
// 'as' => 'test'
// ]);

// Route:: get('/aboutrde', [
// 'uses' => 'SiteController@about',
// 'as' => 'about'
// ]);


Route:: get('/', 'SiteController@index')->name('test');
Route:: get('/about', 'SiteController@about')->name('about');






//viewselims/selim.php

// Route::get('/selim', function () {
//     return view('selim'); //viewselims/selim.php
// });
