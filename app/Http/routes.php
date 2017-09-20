<?php

Route::get('/', 'ProjetosController@lista');

Route::get('/projetos', 'ProjetosController@lista');
Route::get('/projetos/mostra/{id}', 'ProjetosController@mostra');
Route::get('/projetos/remove/{id}', 'ProjetosController@remove');
Route::get('/projetos/novo', 'ProjetosController@novo');
Route::post('/projetos/adiciona', 'ProjetosController@adiciona');

Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);