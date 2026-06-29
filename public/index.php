<?php 
// charger l'autoload;
require_once __DIR__ . "/../vendor/autoload.php" ;


define('APP_ROOT' , dirname(__DIR__));

use Ayky\Controller\PageController ;
use Ayky\Routing\Router ;

$pageController = new PageController();
// $pageController->about();

$router = new Router();
$router->handleRequest($_SERVER['REQUEST_URI']);
// $router->handleRequest($uri);

