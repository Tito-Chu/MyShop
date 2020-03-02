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
Route::get('/test',function() {
    return view('test');
});
Route::get('/seller',function(){
    return view('newseller');
});
/*
Route::get('/profile',function(){
    return view('profile');
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/profile','ProfileController');
Route::get('/uknown', function(){
    return view('unknown');
});



