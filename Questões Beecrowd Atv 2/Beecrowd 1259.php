<?php
function comparar($a, $b) {
    if ($a % 2 == 0 && $b % 2 == 0) {
        return $a - $b;
    }
    elseif ($a % 2 != 0 && $b % 2 != 0) {
        return $b - $a;
    }
    elseif ($a % 2 == 0) {
        return -1;
    } else {
        return 1;
    }
}

$n = intval(fgets(STDIN));

$valores = [];

for ($i = 0; $i < $n; $i++) {
    $valores[] = intval(fgets(STDIN));
}

usort($valores, 'comparar');

foreach ($valores as $valor) {
    echo $valor . "\n";
}
?>
