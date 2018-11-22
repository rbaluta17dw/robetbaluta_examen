<?php

Route::view('/', "enunciado");
Route::get('/clientes', ['as'=>'clientes','uses'=>'ClienteController@index']);
Route::get('/hotels', ['as'=>'hotels','uses'=>'HotelController@index']);
Route::post('/cliente', ['as'=>'cliente','uses'=>'ClienteController@add']);
Route::view('/cliente', "/cliente/create");
Route::get('/reserva/{id}', ['as'=>'reserva','uses'=>'ClienteController@reserva']);
Route::view('/reserva', "/reserva/list");