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

// Route::get('/', function () {
//     return view('welcome');
// });

// con esta linea de codigo conseguimos que vue funcione
Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');

Route::resource('/contacto', 'ContactoController');
/*Route::get('/', 'ContactoController@home');

Route::resource('/reserva', 'ClienteController');

Route::get('/{any}', 'MailController@mail');
Route::get('/', 'ClienteController@home');
*/
