<?php
// Ejemplo de de uso de las funciones anónimas.

$aPaises = array(
    array('id' => 'es', 'pais' => 'España', 'capital' => 'Madrid'),
    array('id' => 'it', 'pais' => 'Italia', 'capital' => 'Roma'),
    array('id' => 'fr', 'pais' => 'Francia', 'capital' => 'Paris'),
);

// Obtener un array con los paises

// Opcion 1
echo "Opcion 1<br/>";
$nombrePaises = array();
foreach ($aPaises as $pais) {
    $nombrePaises[] = $pais['pais'];
}
print_r ($nombrePaises);

// Opcion 2. Con funciones anonimas.
echo "<br/> Opcion 2 <br/>";
//array_map devuelve un array
//despues de pasar cada uno de los elementos del array
//(segundo parámetro)
//por la función (primer parámetro)
$nombrePaises = array_map(function ($pais) {
return $pais['pais'];
}, $aPaises);

print_r($nombrePaises);