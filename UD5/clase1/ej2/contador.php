<?php
/**
*@author Mostafa Cherif
*/

class Contador
{
    private $contador; // Variable privada
    private static $instancia; // Variable clase

    /**
     * Creacion del constructor
     * @param mixed $cont
     */
    public function __construct($cont = 0) {
        $this->contador = $cont;
        self::$instancia ++;
    }

    /**
     * Creacion de contar para aumentar la instancia
     * @return static
     */
    public function contar() {
        $this->contador++;
        return $this;
    }

    /**
     * Devolucion de numeros e instancias creadas
     * @return mixed
     */
    public static function nInstancias(){
        return self::$instancia;
    }

    /**
     * Creacion de una cadena con el metodo mágico __toString
     * @return string
     */
    public function __toString() {
        return (string) $this->contador;
    }
}
