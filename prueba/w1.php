<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $x = 5; // global scope No se puede acceder desde dentro de funciones

    function myTest()
    {
        echo "<p>Variable x es global $x </p>";

        echo "<br>";

        $y = 10; // local scope se accede desde dentro de la funcion
        echo "<p>Variable y es global $y</p>";
        echo "<br>";
    }

    myTest();

    echo "<br>";
    echo "variable x $x";
    echo "variable y no sale $y";
    echo "<br>";
    ?>

    <?php
    // FORMA DE ACCEDER A VARIABLES GLOBALES DESDE FUNCIONES
    $var1 = 22;
    $var2 = 33;
    $resultado;

    function sum()
    {
        $GLOBALS['resultado'] = $GLOBALS['var1'] + $GLOBALS['var2'];
    }
    sum();
    echo "<br> RESULTADO $resultado";

    //Static para que la variable no se borre despues de ejecutar la funcion

    function miVarStatica()
    {
        static $x = 0;
        echo $x;
        $x++;
    }

    myTest();
    myTest();
    myTest();

    ?>
</body>

</html>