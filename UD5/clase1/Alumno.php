<?php

/**
* @author Mostafa Cherif
*/

require_once 'Persona.php';
class Alumno extends Persona {
    private $_nie;
    public function saluda() {
        echo parent::saludo();
        echo "<br>";
        echo "Soy un alumno";
    }
}

?>