<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $random = rand(1, 100);
    echo $random;
    echo "<br>";

    if ($random <= 50) {
        echo "El numero es menor o igual a 50";
    } else {
        echo "El numer es mayor a 50";
    }
    ?>
</body>

</html>