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
/*
rutas
 
 GET POST PUT DELETE RESOURCE

*/

Route::get('/', function () {
    return view('home');
});


Route::resource('users', 'UserController');

Route::resource('families', 'FamilyController');

Route::get('/families/{family}/editFamily', 'FamilyController@editFamily')->name('families.editFamily');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
