<?php

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
    return $router->app->version();
});

$router->get('/products', 'ProductController@index');

$router->get('/products/{id}', 'ProductController@show');

$router->get('/stores', function () use ($router) {
  return "This is all stores";
});

$router->get('/reviews', function () use ($router) {
  return "This is all reviews";
});