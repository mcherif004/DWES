<?php

/**
 * 
 * @author Mostafa Cherif
 * 
 * 
 */



    if (!isset($_POST["enviar"])){
        header("location:form.php");
    }





    echo "datos del formulario: <br>";

    foreach($_POST as $clave => $valor ){
        echo $valor;
        echo"</br>";
    } 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="procesa5.php" method="post">

        <input type="text" name="nombre" id="">
        <input type="text" name="apellidos" id="">
        <input type="text" name="email" id="">
        <input type="submit" name="enviar" id="enviar">

    </form>


</body>
</html>