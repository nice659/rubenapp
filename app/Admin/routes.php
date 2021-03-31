<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->get('/personne/add', 'HomeController@add')->name('PersonneAdd');
    $router->get('/personne/getALL', 'HomeController@getALL')->name('PersonnegetALL');
    $router->get('/personne/edit/{id}', 'HomeController@edit')->name('PersonneEdit');
    $router->get('/personne/update', 'HomeController@update')->name('PersonneUpdate');
    $router->get('/personne/delete/{id}', 'HomeController@delete')->name('PersonneDelete');

});
