<?php

require_once "./config/config.php";
define('PRODUCTOS', $productos);

$pagina = "Pizzas"; // Pagina por "Default"
$recomendaciones = []; // Array vacio para ir almacenando las pizzas

// Iniciamos la sesion
session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria</title>
</head>
<>
    <h1>faMia</h1>
    <form method="POST" action="">
        <input type="submit" name="pizzas" id="pizzas">
        <input type="submit" name="bebidas" id="bebidas">
        <input type="submit" name="postres" id="postres">
        <input type="submit" name="carrito" id="carrito">
    </form>
    <?php 
    // Variables globales

    $pizza = "";
    $bebida = "";
    $postre = "";

    // 

    ?>
</body>
</html>