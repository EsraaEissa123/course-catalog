<?php

require_once 'routes/api.php';

$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

$route = new Route($requestUri, $requestMethod);
$route->resolve();
