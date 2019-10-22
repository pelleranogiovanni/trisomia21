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

Route::group(['namespace' => 'Admin'], function () {

    Route::get('admin/post/listado', 'PostsController@index')->name('admin.post.index');

    Route::get('admin/post/nuevo', 'PostsController@create')->name('admin.post.create');

    Route::post('admin/post/nuevo', 'PostsController@store')->name('admin.post.store');

    Route::get('admin/home', 'HomeController@index')->name('admin.home');

    Route::get('admin/tag', 'TagsController@index')->name('admin.tag.tag');

    Route::get('admin/categoria', 'CategoriasController@index')->name('admin.categoria.categoria');

    Route::post('home/contacto', 'MensajesController@store')->name('admin.mensajes.store');

    Route::get('admin/home/bandejaentrada', 'MensajesController@index')->name('admin.bandejaentrada')->middleware();

    Route::get('admin/home/bandejaentrada/mensaje/{id}', 'MensajesController@show')->name('admin.leermensaje')->middleware();

    Route::get('admin/home/evento', 'AgendasController@create')->name('admin.evento.create')->middleware();

    Route::post('admin/home/evento', 'AgendasController@store')->name('admin.evento.store')->middleware();

    // Admin auth Routes

    Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');

    Route::post('admin-login', 'Auth\LoginController@login')->name('admin.login');

});

Route::get('admin-logout','Auth\LoginController@logout')->name('admin.logout');

Route::get('/', function () {
    return view('web.index');
});

Auth::routes();
