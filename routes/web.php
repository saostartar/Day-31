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



$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('products', 'ProductController@index');
    $router->get('products/{id}', 'ProductController@show');
    $router->post('products', 'ProductController@store');
    $router->put('products/{id}', 'ProductController@update');
    $router->delete('products/{id}', 'ProductController@destroy');
});

$router->group(['middleware' => 'jwt.auth'], function () use ($router) {
    $router->get('protected', function () {
        return response()->json(['message' => 'You are authenticated']);
    });
});

$router->post('register', 'AuthController@register');
$router->post('login', 'AuthController@login');