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
//Route::get('/welcome','UserController');
//Route::get('/', 'UserController@retrieve');
Route::get('/home', 'UserController@welcome');
//Route::get('/logout', 'UserController@login');
//Route::get('/add', 'Usercontroller@add');
//Route::get('/retrieve', 'Usercontroller@retrieve');
?>


