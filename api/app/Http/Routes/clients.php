<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 05/05/2016
 * Time: 10:07
 */

get('/clients', [
    'as' => 'admin.clients', 'uses' => 'Admin\ClientController@index'
]);

get('/clients/create', [
    'as' => 'admin.clients.create', 'uses' => 'Admin\ClientController@create'
]);

post('/clients/store', [
    'as' => 'admin.clients.store', 'uses' => 'Admin\ClientController@store'
]);

get('/clients/edit/{id}', [
    'as' => 'admin.clients.edit', 'uses' => 'Admin\ClientController@edit'
]);

put('/clients/update/{id}', [
    'as' => 'admin.clients.update', 'uses' => 'Admin\ClientController@update'
]);

get('/clients/destroy/{id}', [
    'as' => 'admin.clients.destroy', 'uses' => 'Admin\ClientController@destroy'
]);

