<?php

/**
 * 
 * Formulario Completo
 * @author Mostafa Cherif
 * @date 18-11-2024
 */

 // Incluimos archivo de configuración con los arrays y el archivo con las funciones

include("./config/config.php");
include("./lib/functions.php");

 // Inicialización de las vairables
$nombre = $email = $url = $comentarios = $idioma = "";
$nombreE = $emailE = $generoE = $comentariosE = $urlE = $cochesE = $vehiculosE = $idiomaE = $coloresE = "";
//  $genero = $agenero[0];
$confirmado1 = $confirmado2 = $seleccionado1 = $seleccionado2 = "";

 /* Creo las variables que serán arrays proximamente */
$coche = array();
$vehiculos = array();
$colores = array();
$genero = array();


 // Inicializar variables booleanas para procesar el formulario
$lProcesaFormulario = false;
$errorValidacion = false;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Validación de datos</h1>


    <form action="" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre ?>"><br/>

        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $email ?>"><br/>

        <label>Url:</label>
        <input type="text" name="url" value="<?php echo $url ?>"><br/>

        <label>Comentarios: </label>
        <textarea name="comentarios"><?php echo $nombre ?></textarea><br/>

        <fieldset>
            <legend>Género</legend>
            <?php
                // Recorrer el array de generos del config.php
                foreach ($agenero as $clave => $valor){
                    $confirmado1 = $valor == $genero?"checked":"";
                    echo "<input type='radio' name='genero' value='$valor' $confirmado1/>$valor";
                }
            ?>
        </fieldset><br/>

        <label>Vehículos:</label><br/>
            <?php
                // Recorrer el array de vehiculos del config.php
                foreach($avehiculos as $clave => $valor);

            ?>
        <label>Coches:</label><br/>

        <label>Nivel ingles:</label>
        <select name="idioma">

        </select><br/>

        <label>Colores:</label><br/>
        <select name="colores[]" multiple>      
        </select><br/>

        <input type="submit" name="enviar" value="Enviar">
    </form>

</body>
</html>