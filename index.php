<?php
require(__DIR__."/vendor/autoload.php");

use \App\Controller\Pages\Home;

$value = new \App\Http\Response(500,'Olá mundo');

dump($value->sendResponse());

echo Home::getHome();