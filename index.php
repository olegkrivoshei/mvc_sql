<?php
//
//require_once(__DIR__.'/vendor/autoload.php');
//use Monolog\Logger;
//use Monolog\Handler\StreamHandler;
//$logger = new Logger('channel-name');
//$logger->pushHandler(new StreamHandler(__DIR__.'/app.log', Logger::DEBUG));
//$logger->info('This is a log! ^_^ ');

require 'application/lib/Dev.php';

use application\core\Router;

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

session_start();

$router = new Router;
$router->run();