<?php

use App\Core\App;
use App\Core\Database\{Connection, QueryBuilder};

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));

function view($name, $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}

function redirect($location)
{
    header("Location: /{$location}");
}