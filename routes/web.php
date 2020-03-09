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
Route::get('/nota/{id}', 'MainController@viewNota');
Route::get('/gente','MainController@gente');
Route::get('/quienessomos', 'MainController@qs');
Route::get('/login', 'MainController@login');
Route::get('/contacto', 'MainController@contacto');

Route::get('/perfil', 'MainController@perfil')->middleware('auth');
Route::get('/edit/perfil/{id}', 'MainController@editPerfil')->middleware('auth');
Route::post('/edit/perfil/{id}', 'MainController@updatePerfil')->middleware('auth');

Route::get('/edit/usuario/{id}', 'MainController@editNombreUsuario')->middleware('auth');
Route::post('/edit/usuario/{id}', 'MainController@updateNombreUsuario')->middleware('auth');

Route::get('/edit/email/{id}', 'MainController@editEmail')->middleware('auth');
Route::post('/edit/email/{id}', 'MainController@updateEmail')->middleware('auth');

Route::get('/', 'MainController@index');


Route::get('/edit', 'MainController@list')->middleware('auth');;

Route::get('/newNote', 'MainController@newNote')->middleware('auth');
Route::post('/newNote', 'MainController@recordNote');

Route::get('/newPhoto', 'MainController@newPhoto')->middleware('auth');
Route::post('/newPhoto', 'MainController@recordPhoto');
Route::post('/delete/photo/{id}', 'MainController@deletePhoto')->middleware('auth');


Route::get('/edit/nota/{id}', 'MainController@editNota');
Route::post('/edit/nota/{id}', 'MainController@update')->middleware('auth');
Route::post('/delete/nota/{id}', 'MainController@delete')->middleware('auth');

//Crear una ruta a /miPrimeraRuta, y que al ingresar, devuelva “Creé mi primer ruta en Laravel”.

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/google/login', 'Auth\LoginController@redirectToGoogle');
Route::get('/google/redireccion', 'Auth\LoginController@handleGoogleCallback');

Route::get('/facebook/login', 'Auth\LoginController@redirectToFacebook');
Route::get('/facebook/redireccion', 'Auth\LoginController@handleFacebookCallback');
