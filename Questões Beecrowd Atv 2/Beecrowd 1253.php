<?php
function decifrar($mensagem, $deslocamento) {
    $decifrado = '';

    for ($i = 0; $i < strlen($mensagem); $i++) {
        $caractere = $mensagem[$i];

        if (ctype_upper($caractere)) {
            $caractere = chr(((ord($caractere) - $deslocamento - 65 + 26) % 26) + 65);
        }

        $decifrado .= $caractere;
    }

    return $decifrado;
}

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    $mensagem_cifrada = rtrim(fgets(STDIN));
    $deslocamento = intval(fgets(STDIN));

    echo decifrar($mensagem_cifrada, $deslocamento) . "\n";
}
?>
