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

// Assets
$router->post('assets', ['uses' => 'AssetController@create']);
$router->delete('assets/{id}', ['uses' => 'AssetController@delete']);
$router->get('assets', ['uses' => 'AssetController@getAll']);
$router->get('assets/{id}', ['uses' => 'AssetController@getOne']);

// Companies
$router->post('companies', ['uses' => 'CompanyController@create']);
$router->delete('companies/{id}', ['uses' => 'CompanyController@delete']);
$router->get('companies', ['uses' => 'CompanyController@getAll']);