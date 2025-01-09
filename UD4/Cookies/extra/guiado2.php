<?php
/**
 * Borrar la cookie
 * 
 */

if(isset($_COOKIE["cookie"])){
    setcookie("cookie", "hola mundo", time() -60);
    echo "Cookie borrada";
}