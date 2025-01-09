<?php
/**
 * 
 * Arhivo de prueba para conectar a una base de datos
 */

function conectaDB(){
    try { 
        $dsn = "mysql:host=localhost;dbname=mascotas";
        $db = new PDO($dsn,"mascotas", "mascotas");
        $db-> setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
        $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
        return ($db);

    }

    catch (PDOException $e){
        echo "Error conexion";
        exit();
    }

}

//Consultas no prepradas
$db = conectaDB();
var_dump($db);
$nombre  = 'Pedro';

$sql = "insert into perros(nombre) values('" . $nombre . "')";

$db = conectaDB();
if($db->query($sql)){
    echo "ok";
}else {
    echo "no";
}

//Consultas preparadas
$db = conectaDB();
$sql = "SELECT * FROM perros";
$consulta = $db->prepare($sql);
$consulta->execute();
$resultado = $consulta->fetchAll();
foreach ($resultado as $valor){
    echo "<br>".  $valor['nombre'] . "<br>";
}

//Consulta preperada con datos de usuario que es nesesario evitar
$db = conectaDB();
$campo = $_POST['busqueda'] ?? 'S' ;
$sql = "SELECT * FROM perros WHERE nombre LIKE '".$campo. "%' ";

$consulta = $db->prepare ($sql);
$consulta->execute () ;
$resultado = $consulta->fetchAll();
echo "<br><h1>Listado de perros</h1>";

if (!$resultado) {
    echo "Error en la consulta";
}
else {
    foreach ($resultado as $valor) {
        echo $valor['nombre'] . '<br>';
    }
}

//
$db = conectaDb() ;

//Dos condiciones de búsqueda
$campo = $_POST ['busqueda' ] ?? 'C%' ;
$velocidad = $_POST ['velocidad' ] ?? 3;
$sql = "SELECT * FROM superheroes WHERE nombre LIKE ? AND velocidad > ?";

$consulta = $db->prepare ($sql);
$consulta->execute (array ($campo, $velocidad) ) ;
$resultado = $consulta->fetchAll () ;
$numeroRegistros = $consulta->rowCount();
echo "Listado de Superhéroes : $numeroRegistros<br/>";

if (!$resultado) {
    echo "Consulta vacia";
}else {
    foreach ($resultado as $valor) {
        echo $valor['nombre'] . '<br>';
    }
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
    <form action="" method="post">
        Busqueda:<input type="text" name="busqueda">
        <input type="submit" value="enviar">
    </form>
</body>
</html>

