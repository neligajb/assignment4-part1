<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>multtable.php</title>
</head>
<body>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if (!array_key_exists('min-multiplicand', $_GET)) {
        echo die('<p>Missing parameter: min-multiplicand');
    }
    if (!array_key_exists('max-multiplicand', $_GET)) {
        echo die('<p>Missing parameter: max-multiplicand');
    }
    if (!array_key_exists('min-multiplier', $_GET)) {
        echo die('<p>Missing parameter: min-multiplier');
    }
    if (!array_key_exists('max-multiplier', $_GET)) {
        echo die('<p>Missing parameter: max-multiplier');
    }

    class Params {
        function __construct() {
            $this->minMultiplicand = $_GET['min-multiplicand'];
            $this->maxMultiplicand = $_GET['max-multiplicand'];
            $this->minMultiplier = $_GET['min-multiplier'];
            $this->maxMultiplier = $_GET['max-multiplier'];
        }

        public $minMultiplicand;
        public $maxMultiplicand;
        public $minMultiplier;
        public $maxMultiplier;
    }

    $p1 = new Params();

    echo "<p>" . $p1->minMultiplicand;
    echo "<p>" . $p1->maxMultiplicand;
    echo "<p>" . $p1->minMultiplier;
    echo "<p>" . $p1->maxMultiplier;

    foreach($p1 as $key => $value) {
        if (!is_numeric($value)) {
            die('<p>' . $key . ' must be an integer.');
        }
    }

    if ($p1->minMultiplicand > $p1->maxMultiplicand) {
        die('<p>Minimum multiplicand larger than maximum.');
    }
    if ($p1->minMultiplier > $p1->maxMultiplier) {
        die('<p>Minimum multiplier larger than maximum.');
    }

    ?>
</body>
</html>
