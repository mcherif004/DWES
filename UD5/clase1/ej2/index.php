<?php
/**
 * 
 * @author Mostafa Cherif
 * 
 */

 // Requerimos el contador
require_once "contador.php";

$nInstancia = Contador::nInstancias();

echo $nInstancias;

// Creamos varios contadores
$contador1 = new Contador();
$contador2 = new Contador(100);
$contador3 = new Contador(); // ¿?

// Mostramos el valor de los contadores

echo $contador1 . "</br>";
echo $contador2;

$contador1->contar();
$contador1->contar();

$contador2->contar();
$contador2->contar();

echo $contador1 . "</br>";
echo $contador2;