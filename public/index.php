<?php

require_once __DIR__ . "/../vendor/autoload.php";
// C:\OpenServer\domains\codeholic-my-mvc-php\vendor\autoload.php

use app\core\App;

$app = new App();

$app->router->get('/', function() {
    return 'index';
});
$app->router->get('/contact', function() {
    return 'contact';
});

$app->run();
