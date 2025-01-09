<?php

$users = [["usuario", "password"], ["admin", "12345"], ["pepe", "pepa"]];

function clearData($cadena) {
    $cadena = trim($cadena);
    $cadena = stripslashes($cadena);
    $cadena = htmlspecialchars($cadena);
    return $cadena;
}