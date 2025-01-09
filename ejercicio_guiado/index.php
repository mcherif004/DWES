<?php
/**
 * @author Mostafa Cherif
 * Validacion de formulario
 */

//Incluimos archivo de configuracion con los arrays
include("./config/config.php");
include("./lib/functions.php");

// Inicializamos las variables

$nombre = $email = $genero = $comentario = $urlE = "";
$nombreE = $emailE = $generoE = $comentarioE = $urlE = "";

$cochesSeleccionados = array();
$coloresSeleccionados = array();
$procesaForm = false;
$e_Validacion = false;

if(isset($_POST["submit"])){
    $procesaForm=true;
    $nombre=clearData($_POST['nombre']);
    // Validamos el nombre
    if(empty($nombre)){
        $e_Validacion=true;
        $nombreE="El nombre es obligatorio";
    }
    $email=clearData(($_POST['email']));
    if(empty($email)){
        $e_Validacion=true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form>
        <label>Nombre: </label>
        <input type="text" name="nombre">
        <br>
        <br>

        <label>Email: </label>
        <input type="text" name="email">
        <br>
        <br>

        <label>Url: </label>
        <input type="text" name="url">
        <br>
        <br>

        <label>Comentarios: </label>
        <textarea name="comentarios" rows="" cols="">No es obligatorio</textarea>
        <br>
        <br>
        
        <?php
        echo "<br><label>Genero: </label>";
            foreach ($agenero as $clave => $valor){
                echo '<input type="radio" name="genero" value ="'.$valor.'">'. $valor;
            }
        echo "<br><label>Coches: </label>";
            foreach ($agenero as $clave => $valor){
                echo '<input type="checkbox" name="vehiculos[]" value ="'.$valor.'">'. $valor;
            }
        ?>
    <br>
    <br>
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>