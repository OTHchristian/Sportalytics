<?php

require '../vendor/autoload.php';

$router = new AltoRouter();

$router->map('GET', '/', function() {
    require '../app/views/home.php';
});
$router->map('GET', '/resultats', function() {
    require '../app/views/resultats.php';
});
$router->map('GET', '/matchs', function() {
    require '../app/views/matchs.php';
});
$router->map('GET', '/actualites', function() {
    require '../app/views/actualites.php';
});

$match = $router->match();
if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    require '../app/views/404.php';
}