<?php
/**
 * Crea una cookie de duración limitada, comprueba su estado y destruyela
 * @author = Mostafa Cherif Mouaki
 * @date = 17-10-2024
 */

// Crear cookie
setcookie("c1", "Hola Mundo", time()+60);

echo "Inicio <br/>";

// Mostrar cookie
if (isset($_COOKIE['c1'])){
    echo $_COOKIE['c1'];
}

echo "<button><a href='https://github.com/'>Código</a></button>";
echo "<br/> Fin";