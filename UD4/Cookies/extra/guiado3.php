<?php

/**
 * Contador de veces que se ha accedido a la pagina
 */

if (isset($_COOKIE["contador"])){
    //Creamos la cookie
    setcookie("contador", 0, time() + 3600);    
}else{
    $valor = $_COOKIE["contador"]+1;
    setcookie("contador", $valor, time() + 3600);
}
//Mostramos la cookie
echo $_COOKIE["contador"];