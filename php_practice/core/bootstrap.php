<?php

use App\Core\App;

$config = require 'config.php';

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make($config['database'])
));

function view($name, $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}
