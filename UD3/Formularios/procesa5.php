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

    var_dump($_POST);

    echo "datos del formulario: <br>";



    foreach($_POST as $clave => $valor ){
        echo $valor;
        echo"</br>";
    } 



    
?>