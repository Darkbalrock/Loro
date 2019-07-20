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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/loro','usuariosLoroController@index')->name('loro.index');
route::get('/nuevo','usuariosLoroController@nuevo')->name('loro.nuevo');
route::post('/save','usuariosLoroController@save')->name('loro.save');
route::get('/editar/{id}','usuariosLoroController@edit')->name('loro.editar');
route::put('/update/{id}','usuariosLoroController@update')->name('loro.update');
route::get('/elimina/{id}','usuariosLoroController@delete')->name('loro.elimina');
route::get('/ver/{id}','usuariosLoroController@show')->name('loro.ver');
