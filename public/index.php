<?php

require '../vendor/autoload.php';

$router = new AltoRouter();

$router->map('GET', '/', function() {
    require '../app/views/home.php';
});

$match = $router->match();
if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    require '../app/views/404.php';
}