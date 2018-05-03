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

$router->group([ 'prefix' => 'api/v1' ] , function($router){

    $router->get('products/index' , 'ProductController@index');
    $router->post('products/add' , 'ProductController@addProduct');
    $router->put('products/edit/{id}' , 'ProductController@updateProduct');
    $router->delete('products/delete/{id}' , 'ProductController@deleteProduct');


});

