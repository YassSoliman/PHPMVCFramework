<?php

require_once __DIR__.'/../vendor/autoload.php';
use app\core\Application;

$app = new Application();

$app->router->get('/', function() {
	return 'Hello World';
});

$app->run();

echo '<pre>';
var_dump($_SERVER);
echo explode('/', $_SERVER["REQUEST_URI"])[1];
echo '</pre>';


?>
