<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 04/05/2016
 * Time: 19:22
 */

get('/orders', [
    'as' => 'admin.orders', 'uses' => 'Admin\OrderController@index'
]);

get('/orders/create', [
    'as' => 'admin.orders.create', 'uses' => 'Admin\OrderController@create'
]);

post('/orders/store', [
    'as' => 'admin.orders.store', 'uses' => 'Admin\OrderController@store'
]);

get('/orders/edit/{id}', [
    'as' => 'admin.orders.edit', 'uses' => 'Admin\OrderController@edit'
]);

put('/orders/update/{id}', [
    'as' => 'admin.orders.update', 'uses' => 'Admin\OrderController@update'
]);

get('/orders/destroy/{id}', [
    'as' => 'admin.orders.destroy', 'uses' => 'Admin\OrderController@destroy'
]);

get('/orders/items/{id}', [
    'as' => 'admin.orders.items', 'uses' => 'Admin\OrderController@getItems'
]);

get('/items/store', [
    'as' => 'admin.items.store', 'uses' => 'Admin\OrderController@storeItems'
]);

get('/items/read/{id}', [
    'as' => 'admin.items.read', 'uses' => 'Admin\OrderController@getProduct'
]);