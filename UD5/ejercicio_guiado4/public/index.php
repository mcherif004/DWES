<?php
/**
 * 
 * 
 */

use App\Core\Router;

require_once "../app/config/config.php";
require_once "../app/Controllers/IndexController.php";
require_once "../app/Core/Router.php";
require_once "../vendor/autoload.php";


$router = new Router();
$router->add(
    array(
        'name' => 'nombre',
        'path' => '/^\/saluda\/[a-zA-Z]+$/',
        'action' => [IndexController::class, 'saludaAction']
    ),
    array(
        'name' => 'home',
        'path' => '/^\/$/',
        'action' => [IndexController::class, 'IndexAction']
    )
);

$request = str_replace(DIRBASEURL, '', $_SERVER['REQUEST_URI']);
$route = $router->match($request);

if($route) {
    $controllerName = $route['action'][0];
    $actionName = $route['action'][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
    echo "ruta valida";
}else {
    echo "No route";
}
?>