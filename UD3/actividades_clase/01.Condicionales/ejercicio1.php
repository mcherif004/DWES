
<?php
// 1. Almacena tres números en variables y escribirlos en pantalla de manera ordenada.

    $a = 10;
    $b = 12;
    $c = 15;

    echo "a: " . $a . " b: " . $b . " c: " . $c . "\n" . "ORDENADOS" . "\n";
    if ($a >= $b && $b >= $c) {
        echo "$a, $b, $c";
    } 
    elseif ($a >= $c && $c >= $b) {
        echo "$a, $c, $b";
    } 
    elseif ($b >= $a && $a >= $c) {
        echo "$b, $a, $c";
    } 
    elseif ($b >= $c && $c >= $a) {
        echo "$b, $c, $a";
    } 
    elseif ($c >= $b && $b >= $a) {
        echo "$c, $b, $a";
    } 
    else {
        echo "$c, $a, $b";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercio 1 php</title>
    <style>
        .ver_codigo {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="ver_codigo">
        <button type="button"><a href="">Ver código</a></button>
    </div>   
</body>
</html>