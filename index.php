<?php

define('ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

require __DIR__ . '/vendor/autoload.php';

$router = new \Bramus\Router\Router();
$router->setNamespace('\app\controllers');
$router->get('/', 'MainController@index');
$router->match('GET|POST', '/articles', 'ArticleController@index');
$router->match('GET|POST', '/article/(\w)', 'ArticleController@show');
$router->run();
