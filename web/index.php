<?php


$GLOBALS['PerformanceTwigExtensionMicrotime'] = microtime(true);
 
//define('MUSICBOX_PUBLIC_ROOT', __DIR__);
require_once __DIR__.'/../vendor/autoload.php';



$app = new Silex\Application();



require __DIR__.'/../src/prod.php';
require __DIR__.'/../src/app.php';
require __DIR__.'/../src/routes.php';

 

$app->run();


 