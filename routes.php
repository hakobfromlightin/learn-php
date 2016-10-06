<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('about/culture', 'PagesController@aboutCulture');
$router->get('contact', 'PagesController@contact');
$router->get('tasks', 'TasksController@index');
$router->post('task', 'TasksController@store');