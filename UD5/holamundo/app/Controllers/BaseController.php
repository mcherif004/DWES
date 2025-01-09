<?php

//Definir espacio de nombre
namespace app\Controllers;

class BaseController
{
    public function renderHTML($fileName, $data=[])
    {
        include($fileName);
    }
}

?>