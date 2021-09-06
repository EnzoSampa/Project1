<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/carro', 'CarroController@index');
$router->get('/carro/${id}', 'CarroController@show');
$router->post('/carro', 'CarroController@create');//quando bater uma requisição POST nesta rota a requisição é mapeada para o arquivo carro controller na função create