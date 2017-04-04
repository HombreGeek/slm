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

// Ruta a la pagina de servicios del sitio
Route::name('services_path')->get('/servicios', 'PagesController@services');

// Ruta a la pagina de servicios Venta Acero Figurado
Route::name('aceroFigurado_path')->get('/servicios/acero-figurado', 'PagesController@aceroFigurado');

// Ruta a la pagina de servicios Maquinarias y Equipos
Route::name('maquinariaEquipos_path')->get('/servicios/maquinaria-equipos-construccion', 'PagesController@maquinariaEquipos');

// Ruta a la pagina de servicios Producción de Concreto
Route::name('concreto_path')->get('/servicios/venta-produccion-concreto', 'PagesController@concreto');

// Ruta a la pagina de servicios Alquiler Materiales de Construcción
Route::name('materialesConstru_path')->get('/servicios/alquiler-materiales-construccion', 'PagesController@materialesConstru');

// Ruta a la pagina administracion del sitio
Route::name('admin_path')->get('/admin', 'PagesController@admin');