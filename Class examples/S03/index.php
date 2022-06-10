<?php

//cahnd add begire va sum bargardone
function sum(...$nums)
{
    $sum = 0;
    foreach ($nums as $n) {
        $sum += $n;
    }
    return $sum;
}
$t = sum(4, 8, 10);
echo $t;

echo "<hr>";

$amalgar = function ($a, $b, $c) {
    $adade1 = 0;
    $adade2 = 0;
    $amalgar = "";
    if (is_int($a) && is_int($b) && is_string($c)) {
        echo $a . $c . $b . " " . "=" . " ";
        switch ($c) {
            case "-":
                echo $a - $b;
                break;
            case "+":
                echo $a + $b;
                break;
            case "*":
                echo $a * $b;
                break;
            case "/":
                echo $a / $b;
                break;
            case "%":
                echo $a % $b;
                break;
            default:
                echo "error";
        }
    }
};

?>
<form action="index.php" method="POST">
    <input type="number" name="adade1">
    <input type="number" name="adade2">
    <input type="text" name="amalgar">
    <input type="submit" value="Submit">
</form>
<?php
if(isset($_POST["adade1"])) {
   $amalgar(intval($_POST["adade1"]), intval($_POST["adade2"]), $_POST["amalgar"]);
}
