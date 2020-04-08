<?php

use Illuminate\Support\Facades\Route;

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

//Ruta para el Home
Route::get('/', function () {
    return view('simpsonshome');
});

//Ruta para preguntas frecuentes
Route::get('/preguntas', function(){
  return view('preguntas');
});

//Registro
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Preguntas y respuestas
Route::get('/question', 'QuestionController@index');

//Perfil
Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_avatar');
