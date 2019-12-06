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

Route::get('/perfil', 'UserController@index');


Route::get('/explora','MainController@explora');
Route::get('/nota', 'MainController@nota');
Route::get('/gente','MainController@gente');
Route::get('/quienessomos', 'MainController@qs');
Route::get('/login', 'MainController@login');
Route::get('/contacto', 'MainController@contacto');
Route::get('/perfil', 'MainController@perfil')->middleware('auth');
Route::get('/', 'MainController@index');
Route::get('/newNote', 'MainController@newNote');
Route::get('/edit', 'MainController@edit');
Route::get('/edit', 'MainController@list');

Route::get('/nota/{id}','MainController@viewnota');

//Crear una ruta a /miPrimeraRuta, y que al ingresar, devuelva “Creé mi primer ruta en Laravel”.

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
