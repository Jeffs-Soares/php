<?php

use Alura\Mvc\Controller\Error404Controller;
use Alura\Mvc\Repository\VideoRepository;

require_once __DIR__ . '/../vendor/autoload.php';

$pdo = require_once __DIR__ . '/../config/conn.php';

$videoRepository = new VideoRepository($pdo);

$routes = require_once __DIR__ . '/../config/routes.php';

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];

session_start();
session_regenerate_id();

$isLoginRoute = $pathInfo === '/login';

if (!array_key_exists('logado', $_SESSION) && !$isLoginRoute) {
     header("Location: /login");
     return;
}

$key = "$httpMethod|$pathInfo";

if (array_key_exists($key, $routes)) {

     $controllerClass = $routes[$key];
     $controller = new $controllerClass($videoRepository);     

} else {
     $controller = new Error404Controller();
};

$controller->processaRequisicao();