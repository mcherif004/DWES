<?php

//3. Carga fecha de nacimiento en variables y calcula la edad.

// Adquirimos la fecha de nuestro dispositivo y la asignamos en una variable.
$today_date = new DateTime();
    
// Variablede fecha de nacimiento
$birth_date = new DateTime('2001-08-04 00:00:00');

// Calculamos la diferencia entre la fecha actual y la de nacimiento
// date_diff devuelve un objeto DateInterval. 
$diff = date_diff($birth_date, $today_date);

/* Para representar la información debemos acceder a las propiedades del objeto 
usando "$objeto->PropiedadObjeto". */
echo 'Edad: ' . $diff->y . ' años, ' . $diff->m . ' meses, ' . $diff->d . ' días.';