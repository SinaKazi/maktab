<?php

//cahnd add begire va sum bargardone
function sum(...$nums) {
$sum=0 ;
foreach($nums as $n){
$sum+=$n;
}
return $sum;
}
$t=sum(4,8,10);
echo $t;