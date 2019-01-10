<?php

$router->get('', 'PagesController@home');

$router->get('about', 'PagesController@about');

$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

$router->get('delete', 'DeleteUsersController@index');
$router->post('delete', 'DeleteUsersController@delete');

$router->get('update', 'UpdateUsersController@index');
$router->post('update', 'UpdateUsersController@update');
