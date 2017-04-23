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

Route::get('/about', function () {
    return view('about');
});

Route::get('/casestudies', function () {

    return view('caseStudies');
});

Route::get('/1234', function () {

    return view('1234');
});

Route::get('/laravel', function () {
    return view('laravelDefault');
});

Route::post('public', function () {
$request = request()->file('image')->store('public');
  return back();
});
