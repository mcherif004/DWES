<?php
/**
 * 
 */
session_start();
if (!isset($_SESSION['nombre'])) {
    $_SESSION['nombre'] = 'Mostafa';
    $_SESSION['apellidos'] = 'Cherif Moauki';
}

?>