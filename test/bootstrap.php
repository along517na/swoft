<?php
require_once dirname(dirname(__FILE__)) . "/vendor/autoload.php";
require_once dirname(dirname(__FILE__)) . '/config/define.php';

// init
\Swoft\App::$isInTest = true;

$server = new \Swoft\Server\HttpServer();
\Swoft\Bean\BeanFactory::reload([
    'application' => [
        'class' => \Swoft\Testing\Application::class,
        'inTest' => true
    ],
]);
$initApplicationContext = new \Swoft\Core\InitApplicationContext();
$initApplicationContext->init();