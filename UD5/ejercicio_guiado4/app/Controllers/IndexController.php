<?php

use App\Controllers\BaseController;


require_once "BaseController.php";

class IndexController extends BaseController
{
    public function IndexAction()
    {
        $data = array('message' =>'Hola Mundo');
        $this->renderHTML('../views/index_view.php', $data);
    }

    public function saludaAction($request)
    {
        //Separamos la ruta por cada / y lo añade en un array
        $aSeparado = explode('/', $request);
        //Cogemos el valor final del array
        $nombre = end($aSeparado);
        $data = array('message' => 'Hola '. $nombre);
        $this->renderHTML('../app/views/saludo_view.php', $data);
    }
}

?>