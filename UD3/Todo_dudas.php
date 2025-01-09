<?php
// Diferencias entre print y echo en PHP

/*
echo puede usar varios argumentos a la vez.
print solo puede usar un argumento por cada print.
    El print se puede asignar a una variable:
        $contar = print "Hola mundo!";
        echo $contar; //Mostrara el valor 1
*/

$a = 5;
$b = 10;

echo $a,$b;
echo "<br>";
print $a;

//