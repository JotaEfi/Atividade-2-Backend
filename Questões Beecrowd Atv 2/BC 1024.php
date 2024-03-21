<?php

function criptografar($msm) {

    $msm = str_replace(range('a', 'z'), range('d', 'z') . 'abc', $msm);
    $msm = str_replace(range('A', 'Z'), range('D', 'Z') . 'ABC', $msm);

    $msm = strrev($msm);

    $tamanho = strlen($msm);
    $metade = intval($tamanho / 2);
    for ($i = $metade; $i < $tamanho; $i++) {
        if (ctype_alpha($msm[$i])) {
            $msm[$i] = chr(ord($msm[$i]) - 1);
        }
    }

    return $msm;
}

$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    $linha = rtrim(fgets(STDIN));

    echo criptografar($linha) . "\n";
}
?>
