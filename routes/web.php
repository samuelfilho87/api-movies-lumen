<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return 'Movies API developed in  ' . $router->app->version();
});

$router->group(['prefix' => 'movies'], function () use ($router) {
    $router->get('/', 'MovieController@index');
    $router->get('/{id}', 'MovieController@show');
    $router->get('/search/{word}', 'MovieController@search');
    $router->post('/', 'MovieController@store');
    $router->put('/{id}', 'MovieController@update');
    $router->delete('/{id}', 'MovieController@destroy');
});
