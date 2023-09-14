<?php

//declare(stric_types=1);
//Solo para ejecutar en consola
echo "\n";
echo "Hola mundo\n";

$x = 1;
while ($x <= 5) {
    echo "El numero es: $x \n";
    $x++;
}

do {
    echo "El numero dentro del do es: $x\n";
    $x += 10;
} while ($x < 50);

// foreach

echo ("\n\n");
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value \n";
}

function addNumbers(int $a, int $b)
{
    return $a + $b;
}

echo addNumbers(5, "10");
// Forma completa de funcion con strict_types y valor por default

function sumaNumeros(float $a, float $b = 10.0): float
{
    return $a + $b;
}

echo "\n\n" . sumaNumeros(1.2);

// El paso de argumentos es por copia para pasar la referencia usar &

function suma_cinco(&$numero)
{
    $numero += 5;
}

$numerito = 10;
suma_cinco($numerito);
echo "\n\n" . $numerito;
