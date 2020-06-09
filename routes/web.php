<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');
Route::resource('/contacto', 'ContactoController');
Route::resource('/reserva', 'ClienteController');
Route::resource('/consultaGeneral', 'GeneralController');
Route::resource('/consultaEstetica', 'EsteticaController');



