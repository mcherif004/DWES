<?php
/* No sirve
$a_contactos = array(
    array(
        "nombre" => "Roberto",
        "email" => "roberto@gmail.com",
        "telefono" => "666666666"
    )
)*/

/**
 * Ejemplo de uso de sesiones utilizando un array para manejo de una agenda de contactos
 * 
 * @author Mostafa Cherif
 * 
 */

// Inciciamos sesion

session_start();

// Si no existe la sesion, la creamos como array vacio
if(!isset($_SESSION["contacts"])){
    $_SESSION["contacts"] = array();
}

// Determinamos si hemos pulsado el boton ENVIAR

if(isset($_POST["enviar"])){
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];

    //Añadimos un nuevo elemento al array. Ver array_push
    $_SESSION["contacts"][] = array(
        "nombre" => $nombre,
        "email" => $email,
        "telefono" => $telefono
    );
}

$data = $_SESSION["contacts"];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<br>
<body>
    <h1>Agenda</h1>
    <h2>Nuevo contacto</h2>
    <form action="" method="post">
        Nombre <input type="text" name="nombre" id="nombre">
        Email <input type="text" name="email" id="email">
        Telefono <input type="text" name="telefono" id="telefono">
        <input type="submit" name="enviar" value="enviar">
    </form>
    <h2>Lista de Contactos</h2>
    <?php
        foreach($data as $clave => $valor){
            echo $valor["nombre"]."-".$valor["email"]."-".$valor["telefono"];
            echo "</br>";
        }
    ?>

    </br>
    <a href="cierraSesion.php">Cerrar sesion</a>
</body>
</html>