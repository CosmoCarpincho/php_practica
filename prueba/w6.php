<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "PHP_SELF" . " ==> ";
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo "SERVER_NAME" . " ==> ";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo "HTTP_POST" . " ==> ";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo "HTTP_REFERER" . " ==> ";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo "HTTP_USER_AGENT" . " ==> ";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo "SCRIPT_NAME" . " ==> ";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";
    echo "GATEWAY_INTERFACE" . " ==> ";
    echo $_SERVER['GATEWAY_INTERFACE'];
    ?>
</body>

</html>