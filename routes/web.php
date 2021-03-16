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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::name('contactar')->get('contactar/', 'SistemController@contactar');
Route::get('/galeria', 'SistemController@galeria');
//Registro de los usuarios 
Route::name('registrarse')->get('registrarse/', 'SistemController@registrarse');
Route::name('guardar')->post('guardar/','SistemController@guardar'); 
//Mostrar informacion del perfil 
Route::name('home')->get('home/', 'SistemController@home');
//editar informacion del perfil 
Route::name('perfil_edita')->get('perfil_edita/', 'SistemController@perfil_edita');
Route::name('modificar2')->get('modificar2/{id}','SistemController@modificar2');
Route::name('salvar2')->put('salvar2/{id?}','SistemController@salvar2');
//Editar datos 
Route::name('casa')->get('casa/', 'SistemController@casa');
Route::get('/editar', 'SistemController@formu');
//Vista de envio''
Route::name('tabla')->get('tabla/', 'SistemController@tabla');
//Formulario de envio
Route::get('/envio_formu', 'SistemController@estados');
Route::name('formulario_en')->get('formulario_en/', 'SistemController@formulario_en');
Route::name('guarda')->post('guarda/','SistemController@guarda'); 
//Login
Route::name('login')->get('login/', 'LoginController@login');
Route::name('validar')->post('validar/', 'LoginController@validar');
Route::name('logout')->get('logout/', 'LoginController@logout');
//Carrito
Route::get('/mostrarcarrito', 'SistemController@mostrarcarrito');
//Combo de estados y municipios
Route::name('ajxmunicipios')->get('ajxmunicipios/', 'AjaxController@ajxmunicipios');
//Route::name('index')->get('/', 'SistemController@index');
//Route::name('index')->get('index/', 'SistemController@index');
Route::get('/envio_formu', 'SistemController@index');
//Modificar
Route::name('modificar2')->get('modificar2/{session_id}','LoginController@modificar2');
Route::name('salvar2')->put('salvar2/{session_id}','LoginController@salvar2');

//Carrito 
 
Route::get('/products', 'ProductsController@products')->name('products'); 
Route::name('detail')->get('detail/{id}','ProductsController@detail');
Route::get('/cart', 'ProductsController@cart')->name('cart'); 
Route::get('add-to-cart/{id}', 'ProductsController@addToCart'); 
//Añadir productoss
Route::name('productos')->post('productos/','SistemController@productos');
Route::name('carga_producto')->get('carga_producto/', 'SistemController@carga_producto');

//Excel
Route::name('reporte')->get('reporte/', 'ExcelController@reporte');
Route::name('excel01')->get('excel01/', 'ExcelController@excel01');
Route::name('excel02')->get('excel02/{id}', 'ExcelController@excel02');

//Buscar
Route::name('buscar')->get('buscar/', 'ProductsController@buscar');

//Correo 
Route::name('correo')->get('correo/', 'CorreoController@correo');
Route::name('enviar1')->get('enviar1/', 'CorreoController@enviar1');
Route::name('enviar2')->get('enviar2/', 'CorreoController@enviar2');


