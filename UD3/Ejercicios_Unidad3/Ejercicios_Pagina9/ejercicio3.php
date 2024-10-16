<?php

/**
* @author Mostafa Cherif
*/

// 3. Carga fecha de nacimiento en variables y calcula la edad.

$actual_day = 11;
$actual_month = 10;
$actual_year = 2024;

$birthday = 29;
$birthmonth = 06;
$birthyear = 2004;

$age = ($actual_year - $birthyear) + ($actual_month - $birthmonth) + ($actual_day - $birthday);

echo "$age";