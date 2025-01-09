<?php 
//requerimos el bootstrap
require_once("../bootstrap.php");
require_once("../venddor/autoload.php");

use App\Core\Router;

$router = new Router();
/*
Rutas de mi app
---------------
/
controlador: perrosController
    accion: indexAction
        descripcion: muestra todos los perros
/add
    controlador: perrosController
    accion: addAction
        descripcion: añade un perro nuevo
/del/nº
    controlador: perrosController
    accion: delAction
        descripcion: borra un perro
/edit/nº
    controlador: perrosController
    accion: editAction
        descripcion: edita un perro
/search?q=anything
    controlador: perrosController
    accion: searchAction
        descripcion: busca un perro
*/

$router->add(array('name' => 'primera', 'path' => '/^\/$/', 'action' => [perrosController::class, 'IndexAction']));

$request = $_SERVER['REQUEST_URI'];
$route = $router->match($request);
?>