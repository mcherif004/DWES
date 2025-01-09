<?php
// Carga de parámetros
// Autocarga de clases
// Utiliza las clases necesarias;

require_once "../vendor/autoload.php";
require_once "../app/Config/config.php";

use app\Core\Router;
use app\Controller\IndexController;

$router = new Router();
$router->add(array(
    'name'=>'home',
    'path'=>'/^\/$/',
    'action'=>[IndexController::class, 'IndexAction']));
$request=str_replace(DIRBASEURL,'',$_SERVER['REQUEST_URI']);
$route =$router->match($request);

if ($route) {
    $controllerName = $route['action'][0];
    $actionName = $route['action'][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
}
else {
    echo "No route";
}