<?php
/**
 * 
 * 
 */

if (!isset($_POST['enviar'])) {
    header('Location: test3.php');
}

//Obtenemos la extension, podriamos hacerlo tambien con pathinfo() mas adelante
$temp = explode(".", $_FILES["file"]["name"]); // File es el nombre del input
$extension = end($temp);

if (($_FILES["file"]["name"] < MAXSIZE) &&
    in_array($_FILES["file"]["type"],$allowedformat) &&
    in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Return code: " . $_FILES["file"]["error"] . "<br/>";
    } else {
        $filename = $_FILES["file"]["name"];
        // Codificamos el nombre del fichero en el servidor
        $filename = uniqid(). '.'.pathinfo($filename, PATHINFO_EXTENSION);
        if (file_exists(DIRUPLOAD .$filename)) {
            echo $_FILES ["file"]["file"] . "already exists.";
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], DIRUPLOAD . $filename);

            echo "Stored in: " . DIRUPLOAD . $filename;
        }
    }
    }

$grupo = $_POST['grupo'];
$curso = $_POST['curso'];
$formato = $_POST['formato'];

echo $grupo . '<br/>';
echo $curso . '<br/>';
echo $formato . '<br/>';

?>