<?php

declare(strict_types=1);

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . "," . $cars[1] . " and " . $cars[2] . ".";

echo "\n\n" . count($cars);


// Associative Arrays

$edad = array("Pedro" => "35", "Alberto" => "40", "Joel" => "25");
echo "\nEdad de Pedro es " . $edad['Pedro'];


// para devolver la key y el valor en foreach

foreach ($edad as $x => $x_value) {
    echo "\nKey=" . $x . ", Value=" . $x_value;
}
/*
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
*/
echo "\n\nasort";
asort($edad); // ordena el arreglo por el valor. Lo modifica ojo. No es funcional
foreach ($edad as $x => $x_value) {
    echo "\nKey=" . $x . ", Value=" . $x_value;
}

echo "\n\nksort";
ksort($edad); // ordena el arreglo por la llave
foreach ($edad as $x => $x_value) {
    echo "\nKey=" . $x . ", Value=" . $x_value;
}
// ESTO NO FUNCIONA
// echo "\n GLOBALS => " . $GLOBALS;
// echo "\n _SERVER => " . $_SERVER;
// echo "\n _REQUEST => " . $_REQUEST;
// echo "\n _POST => " . $_POST;
// echo "\n _GET => " . $_GET;
// echo "\n _FILES => " . $_FILES;
// echo "\n _COOKIE => " . $_COOKIE;
// echo "\n _SESSION => " . $_SESSION;
