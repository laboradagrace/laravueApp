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
Route::get('/welcome','UserController@welcome');
Route::get('/home', 'UserController@retrieve');
//Route::get('/', 'UserController@welcome');
//Route::get('/logout', 'UserController@login');
Route::get('/add', 'Usercontroller@add');
Route::post('/add', 'Usercontroller@store')->name('store');
Route::post('/delete/{id}', 'Usercontroller@destroy')->name('destroy');
Route::get('/edit/{id}', 'Usercontroller@edit');
Route::post('/edit/{id}', 'Usercontroller@update')->name('update');
Route::get('/retrieve', 'Usercontroller@retrieve');
//Route::get('/retrieve', 'Usercontroller@retrieve');
?>


