<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 05/05/2016
 * Time: 10:05
 */

get('/products', [
    'as' => 'admin.products', 'uses' => 'Admin\ProductController@index'
]);

get('/products/create', [
    'as' => 'admin.products.create', 'uses' => 'Admin\ProductController@create'
]);

post('/products/store', [
    'as' => 'admin.products.store', 'uses' => 'Admin\ProductController@store'
]);

get('/products/edit/{id}', [
    'as' => 'admin.products.edit', 'uses' => 'Admin\ProductController@edit'
]);

put('/products/update/{id}', [
    'as' => 'admin.products.update', 'uses' => 'Admin\ProductController@update'
]);

get('/products/destroy/{id}', [
    'as' => 'admin.products.destroy', 'uses' => 'Admin\ProductController@destroy'
]);