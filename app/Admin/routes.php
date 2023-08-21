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
    $router->resource('category-models', CategoryController::class);
    $router->resource('lessons-models', LessonsController::class);
    $router->resource('writing-models', WritingController::class);
    $router->resource('reading-models', ReadingController::class);
    $router->resource('speaking-models', SpeakingController::class);
    $router->resource('listening-models', ListeningController::class);

});
