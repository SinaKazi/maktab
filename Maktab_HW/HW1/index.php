<?php
//Q yakhdarchi

$t = 110;

if ($t > 100) {
    echo "steam";
} elseif ($t < 100) {
    echo "ice";
} else {
    echo "water";
}
echo "<hr>";
//Q Pythagoras

$v = 5;
$z1 = 4;
$z2 = 3;

if (pow($z1, 2) + pow($z2, 2) == pow($v, 2)) {
    echo "yes";
} else {
    echo "no";
}
echo "<hr>";
//Q Mobile

$k = 80;

for ($i = 0; $i < $k ; $i++ ) {
    $i = +1;
}
echo $i;
