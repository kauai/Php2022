<?php
require(__DIR__."/vendor/autoload.php");

use \App\Controller\Pages\Home;
use \App\Http\Router;

define('APP_URL','http://localhost/PHP-2022/WDEV-MVC');

$obRouter = new Router(APP_URL);
dump($obRouter);

echo Home::getHome();