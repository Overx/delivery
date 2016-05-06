<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 04/05/2016
 * Time: 19:46
 */

get('/', [
    'as' => 'admin.home', 'uses' => 'Admin\HomeController@index'
]);