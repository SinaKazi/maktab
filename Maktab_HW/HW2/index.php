<?php
$humandna = "hygsafdsabdfcijgsad gsa";
$humandna = explode(" ", $humandna);
$dnah = strtoupper($humandna[0]);
$dnav = strtoupper($humandna[1]);
$searchv = preg_match_all('/(g)(s)(a)/i', $dnah ,$matches);
print_r($matches);