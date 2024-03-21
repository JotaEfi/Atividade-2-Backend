<?php
$input = fgets(STDIN);
$val = explode(" ", $input);
$a = intval($val[0]);
$b = intval($val[1]);
$c = intval($val[2]);
$maior_ab = ($a + $b + abs($a - $b)) / 2;
$maior = ($maior_ab + $c + abs($maior_ab - $c)) / 2;
echo $maior . " eh o maior\n";
?>