<?php

//Definir espacio de nombre
namespace App\Controllers;

class BaseController
{
    public function renderHTML($fileName, $data=[])
    {
        include($fileName);
    }
}

?>