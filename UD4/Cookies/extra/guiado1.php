<?php
/**
*
* Crear una cookie 
*
*/
//Crear la coockie
setcookie("cookie", "Hola mundo",time() +60);

echo "Incio";
echo "<br>";

//Mostrar la cookie
if (isset($_COOKIE["cookie"])){
    echo $_COOKIE["cookie"];
}

echo "<br>";
echo "Fin";
