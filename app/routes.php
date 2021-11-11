<?php

$router->get('', 'App\Controllers\PagesController@home');
$router->get('about', 'App\Controllers\PagesController@about');
$router->get('contact', 'App\Controllers\PagesController@contact');
$router->get('users', 'App\Controllers\UserController@index');
$router->post('users', 'App\Controllers\UserController@store');
