<?php

// use app\Controllers\BaseController;
namespace app\Controllers;
require_once "./BaseController.php";

class IndexController extends BaseController
{
    public function IndexAction()
    {
        $data = array('message' =>'Hola Mundo');
        $this->renderHTML('../views/index_view.php', $data);
    }
}

?>