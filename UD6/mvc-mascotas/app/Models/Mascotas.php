<?php
require_once "DBAbstractModel.php";
class Mascotas extends DBAbstractModel
{
    private static $instancia;
    // Patron singleton, no puedo tener dos objetos de la clase mascotas
    public static function getInstancia()
    {
        if (!isset(self::$instancia)) {
            $miClase = __CLASS__;
            self::$instancia = new $miClase;
        }
        return self::$instancia;
    }

    public function __clone()
    {
        trigger_error('La clonación no es permitida!.', E_USER_ERROR);
    }
    private $id;
    private $nombre;
    private $peso;
    private $raza;
    private $create_at;
    private $updated_at;

    // Creo los setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setPeso($peso) {
        $this->peso = $peso ;
    }
    public function setRaza($raza) {
        $this->raza = $raza ;
    }

    public function getMensaje(){
        return $this->mensaje;
    }

    /*Método para insertar datos en la tabla perros*/
    public function set() {
        $this->query = "INSERT INTO perros(nombre, peso, raza)
        VALUES(:nombre, :peso, :raza)";
        
        //$this->parametros['id']= $id;
        $this->parametros['nombre']= $this->nombre;
        $this->parametros['peso']= $this->peso;
        $this->parametros['raza']= $this->raza;
        $this->get_results_from_query();
        //$this->execute_single_query();
        $this->mensaje = 'Mascota añadido.';
    }

    public function get($id = ''){
        $this->query = "SELECT * FROM perros WHERE id = :id";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        if (count($this->rows) == 1) {
            foreach ($this->rows[0] as $propiedad=>$valor) {
                $this->$propiedad = $valor;
            }
            $this->mensaje = 'Mascota encontrada';
        } else {
            $this->mensaje = 'Mascota no encontrada';
        }
        return $this->rows[0] ?? null;
        
    }

    public function edit(){
        $fecha = new DateTime();
        $this->query = "UPDATE perros SET nombre=:nombre, peso=:peso, raza=:raza, updated_at=:updated_at/*now() en lugar de update_at*/ WHERE id=:id";
        $this->parametros['id'] = $this->id;
        $this->parametros['nombre'] = $this->nombre;
        $this->parametros['peso'] = $this->peso;
        $this->parametros['raza'] = $this->raza;
        $this->parametros['updated_at'] = date('Y-m-d H:i:s', $fecha->getTimestamp());
        $this->get_results_from_query();
        $this->mensaje = 'Mascota modificada';
    }

    public function delete($id = ''){
        $this->query = "DELETE FROM perros WHERE id=:id";
        $this->parametros['id'] = $id; //$this->id; 
        $this->get_results_from_query();
        $this->mensaje = 'Mascota eliminada';
    }
}