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

$router->get('/', function () use ($router) {
    return 'çalıştı';
});

$router->get ('/api/product/v1','ProductController@showall');
$router->get ('/api/product/category/v1','ProductController@showAllCategory');
$router->get ('/api/product/v1/{id}','ProductController@show');
$router->post ('/api/v1/product','ProductController@save');
$router->put ('/api/product/v1/{id}','ProductController@update');
$router->delete ('/api/product/v1/{id}','ProductController@delete');
