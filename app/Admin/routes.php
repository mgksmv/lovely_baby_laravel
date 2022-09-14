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
    $router->resource('users', UserController::class);
    $router->resource('website-info', WebsiteInfoController::class);
    $router->resource('sliders', SliderController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('collections', CollectionController::class);
    $router->resource('products', ProductController::class);
    $router->resource('product-images', ProductImageController::class);
    $router->resource('custom-specifications', CustomSpecificationController::class);

});
