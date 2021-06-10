<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('home', 'HomeController@index');

Route::Controllers([
	'auth'=> 'Auth\AuthController',
	'password'=> 'Auth\PasswordController',
]);

//Inicial após LOGIN
Route::get('/', 'ProdutoController@listarProdutos');


//Produtos
Route::get('/produtos', 'ProdutoController@listarProdutos');
Route::get('/produtos/detalheProduto/{id}', 'ProdutoController@detalheProduto');
Route::get('/produtos/novoProduto', 'ProdutoController@novoProduto');
Route::get('/produtos/removerProduto/{id}', 'ProdutoController@removerProduto');
Route::post('/produtos/adicionarProduto', 'ProdutoController@adicionarProduto');


//Login
Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');

