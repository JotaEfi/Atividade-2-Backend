<?php
function mdc($a, $b) {
    while ($b != 0) {
        $resto = $a % $b;
        $a = $b;
        $b = $resto;
    }
    return $a;
}

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    list($f1, $f2) = explode(" ", fgets(STDIN));

    $tamanho_maximo_pilha = mdc($f1, $f2);

    echo $tamanho_maximo_pilha . "\n";
}
?>
