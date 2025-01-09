<?php

/**
* @author Mostafa Cherif
*/

require_once '../app/perro.php';
require_once '../app/persona.php';

use App\Models\Perro;
use App\Models\Persona;

$perro = new Perro('Tana', 'negro');
echo "Dame la pata";
$perro->darPata();
$perro->entrenar();
$perro->entrenar();
$perro->entrenar();
$perro->entrenar();
$perro->entrenar();
$perro->entrenar();
$perro->darPata();
$perro->darPata();