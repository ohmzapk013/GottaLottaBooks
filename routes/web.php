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
//     return view('home');
// });



Auth::routes();

Route::get('/', 'LandingController@index')->name('landingPage');
Route::get('/home', 'LandingController@index')->name('landingPage');
Route::get('/profile', 'ProfileEditController@index')->name('profileEdit');
Route::post('/profile', 'ProfileEditcontroller@update')->name('profileEdit');

Route::get('/book/{id}', 'BookController@index')->name('bookDetails');
Route::get('/logout', 'HomeController@logout');
Route::get('/userprofile',function(){
    return view('profile');
});

