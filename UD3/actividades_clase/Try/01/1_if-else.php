<!-- Almacena tres números en variables y escribirlos en pantalla de manera ordenada. -->
<?php
$a = 2004;
$b = 6;
$c = 29;

if ($a >= $b && $a >= $c){
    if ($b >= $c){
        echo $a . "\n" . $b . "\n" . $c;
    }else{
        echo $a . "\n" . $c . "\n" . $b;
    }
}elseif ($b >= $a && $b >= $c){
    if ($a >= $c){
        echo $b . "\n" . $a . "\n" . $c;
    }else{
        echo $b . "\n" . $c . "\n" . $a;
    }
}elseif ($c >= $b && $c >= $a){
    if ($a >= $b){
        echo $c . "\n" . $a . "\n" . $b;
    }else{
        echo $c . "\n" . $b . "\n" . $a;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1 - Condicionales</title>
</head>
<body>
    <br>
    <a href="./" type="button" id="boton">Volver atras</a>
</body>
</html>