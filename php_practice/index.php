<?php

use App\Core\{Router, Request};

require 'vendor/autoload.php';

$database = require 'core/bootstrap.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
