<!-- задание №1 -->

<?php

$a = rand(-100,100);
$b = rand(-100,100);

if (gettype($a) == "integer" || gettype($b) == "integer") {

    if ($a >= 0 && $b >= 0) {
        echo "а и б положительные";
    } else if ($a < 0 && $b < 0) {
        echo "а и б отрицательные";
    } else if (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
        echo "а и б разных знаков";
    }
}
?>

<!-- задание №2 --><br>

<?php

$a = rand(0, 15);

if ($a < 0 || $a > 15) {
    echo "Ошибка";
}

switch ($a) {
    case 0:
        echo "0";
        echo PHP_EOL;
    case 1:
        echo "1";
        echo PHP_EOL;
    case 2:
        echo "2";
        echo PHP_EOL;
    case 3:
        echo "3";
        echo PHP_EOL;
    case 4:
        echo "4";
        echo PHP_EOL;
    case 5:
        echo "5";
        echo PHP_EOL;
    case 6:
        echo "6";
        echo PHP_EOL;
    case 7:
        echo "7";
        echo PHP_EOL;
    case 8:
        echo "8";
        echo PHP_EOL;
    case 9:
        echo "9";
        echo PHP_EOL;
    case 10:
        echo "10";
        echo PHP_EOL;
    case 11:
        echo "11";
        echo PHP_EOL;
    case 12:
        echo "12";
        echo PHP_EOL;
    case 13:
        echo "13";
        echo PHP_EOL;
    case 14:
        echo "14";
        echo PHP_EOL;
    case 15:
        echo "15";
        echo PHP_EOL;
}
?>


<!-- задание №3 --><br>

<?php

function sum($x, $y)
{
    return ($x + $y);
}
function sub($x, $y)
{
    return ($x - $y);
}
function div($x, $y)
{
    if ($y == 0) {
        echo "Ошибка";
    }
    return ($x / $y);
}
function mult($x, $y)
{
    return ($x * $y);
}

echo sum(2, 5);
echo PHP_EOL;
echo sub(2, 5);
echo PHP_EOL;
echo div(2, 5);
echo PHP_EOL;
echo mult(2, 5);
echo PHP_EOL;

?>

<!-- задание №4 --><br>

<?php

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case "+":
            echo sum($arg1, $arg2);
            break;
        case "-":
            echo sub($arg1, $arg2);
            break;
        case "/":
            echo div($arg1, $arg2);
            break;
        case "*":
            echo mult($arg1, $arg2);
            break;
        default:
            echo "Ошибка";
    }
}

mathOperation(2,3,"-");

?>