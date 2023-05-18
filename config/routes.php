<?php

//This is the file that will handle all the routes for the project.

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');


// Link the routes to the controllers
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
$router->get('users/create', 'UsersController@create');
$router->get('users/{id}', 'UsersController@show');

// Link the routes to html pages
$router->get('login', 'PagesController@login');


?>