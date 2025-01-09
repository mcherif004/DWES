<?php
/*
Contenido.
1. Introducción.
2. Sentencias de control.
3. Funciones.
4. Arrays.
5. Gestión de formularios.
*/

//function salto

function h1($h1) {
    echo "<h1>$h1</h1>";
}

function h2($h2) {
    echo "<h2>$h2</h2>";
}

function h3($h3) {
    echo "<h3>$h3</h3>";
}

function parrafo($p) {
    echo "<p>$p</p>";
}

function salto() {
    echo "<br>";
}

function espacio(){
    echo "\n";
}

// Estructuras de control
h1("Estructuras de control");
    // if/else if/else
    h2("if/else if/else");
    $a = 2;
    if ($a == 5) {
        echo "$a es igual a 5";
    }
    else if ($a < 5) {
        echo "$a es menor a 5";
    }
    else {
        echo "$a es mayor que 5";
    }

salto();

    // switch
    h2("switch");
    $b = "";
    switch ($a) {
        case $b == $a:
            echo "El numero $a es igual a $b";
            break;
        case $b == " " || $b == "":
            echo "El numero b esta vacio";
            break;
        case $a == " ":
        case $a == "":
            echo "El numero a esta vacio";
            break;
        case 2:
            echo "El numero es $a";
        default:
            echo "Error";
    }

salto();

    // while
    h2("while");
    $c = 100;
    while ($c >= 100){
        echo "Tu saldo es de $c vas bien";
        break;
    }

salto();

    while ($c != 200):
        echo "Pero todavia no has recaudado $c";
        $calc = 200 - $c;
        echo salto();
        echo "Te faltan $calc de 200";
        break;
    endwhile;

salto();

    // do ... while
    h2("do ... while");
    $d = 50;
    do {
        $d++; // Es igual a: $d = $d + 1;
        echo $d;
        echo espacio();
    } while($d < $c);

salto();

    // for  
    h2("for");
    for ($e = 120; $e > $c; $e--){
        echo $e;
        echo espacio();
    }

salto();

// Funciones y Librerias
h1("Funciones y Librerias");
    // Variables estaticas
    h2("Variables estaticas");

    function manejoVariablesEstaticas() {

        static $varEstatica= 0;
        $variable=0;

        $varEstatica++;
        $variable++;

        echo "Soy una variable estatica: $varEstatica";
        salto();
        echo "Soy una variable normal: $variable";
    }
    echo "<p>Llamada 1</p>";
    manejoVariablesEstaticas();
    echo "<p>Llamada 2</p>";
    manejoVariablesEstaticas();
    echo "<p>Llamada 3</p>";
    manejoVariablesEstaticas();

    // Formas de pasar parametros
    h2("Formas de pasar parametros");

    h3("Por valor");

    function porValor($valor) {
        $valor++;
    }
    $v = 10;
    echo "Antes de suma: ".$v;
    salto();
    porValor($v);
    echo "Despues de la suma: ".$v;

    h3("Por referencia");

    function porReferencia(&$valor) { // Se usa el operador & + $...
        $valor++;
    }
    $vr = 20;
    echo "Antes de la suma: ".$vr;
    salto();
    porReferencia($vr);
    echo "Despues de la suma: ".$vr;

    salto();

    // Argumentos por defecto
    h2("Argumentos por defecto");
    function colores($color = 'Negro') {
        echo "El color es : $color";
    }

    colores(); // Sale Negro ya que es por defecto
    salto();
    colores('Blanco');
    salto();

    //Manejo de argumentos
    h2("Manejo de argumentos");
    h3("func_num_args()");
    salto();
    h3("func_get_args()");
    salto();
    h3("func_get_arg()");
    salto();

    // Devolucion de variables
    h3("Devolucion de variables");


// Arrays

    // Array indexado
    $aNumeros = array(1,2,3,4,5,6);

    $aNumeros2 = array(
        array(1),
        array(2),
        array(3),
        array(4)
    );

    // Array asociativo
    