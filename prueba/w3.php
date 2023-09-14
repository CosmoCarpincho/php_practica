<!DOCTYPE html>
<html lang="en">

<head></head>

<body>
    <?php

    // Constantes
    define("NUMERO", 10);
    echo NUMERO;

    // Clase

    class auto
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }

        function llamar()
        {
            echo "\n" . $this->color . "\n" . $this->model . " \n";
        }
    }
    $miAuto = new auto("Negro", "Ford");
    $miAuto->llamar();

    // Constant Arrays
    define("cars", ["Alfa Romeo", "BMW", "Toyota"]);
    echo cars[0];
    echo "\n";
    echo cars[1];


    //switch

    echo "\n\n __SWITCH__ \n\n";
    $n = 3;
    switch ($n) {
        case "1":
            echo 1;
            break;
        case "2":
            echo 2;
            break;
        default:
            echo "default";
    }
    ?>
</body>

</html>