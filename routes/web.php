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

// Ruta a la pagina de inicio del sitio
Route::name('home_path')->get('/', 'PagesController@home');

// Ruta a la pagina de somos del sitio
Route::name('about_path')->get('/somos', 'PagesController@about');

// Ruta a la pagina administracion del sitio
Route::name('admin_path')->get('/admin', 'PagesController@admin');