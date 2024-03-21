<?php
function calcularLeds($numero) {
    // Definindo a quantidade de LEDs necessários para cada dígito
    $ledsPorDigito = [
        0 => 6, 1 => 2, 2 => 5, 3 => 5, 4 => 4,
        5 => 5, 6 => 6, 7 => 3, 8 => 7, 9 => 6
    ];

    $totalLeds = 0;

    foreach (str_split($numero) as $digito) {
        $totalLeds += $ledsPorDigito[$digito];
    }

    return $totalLeds;
}

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    $numero = trim(fgets(STDIN));

    echo calcularLeds($numero) . " leds\n";
}
?>
