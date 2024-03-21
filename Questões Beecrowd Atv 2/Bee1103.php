<?php
while (true) {
    fscanf(STDIN, "%d %d %d %d", $hora_atual, $minuto_atual, $hora_alarme, $minuto_alarme);
    if ($hora_atual == 0 && $minuto_atual == 0 && $hora_alarme == 0 && $minuto_alarme == 0) {
        break;
    }
    $minutos_atual = $hora_atual * 60 + $minuto_atual;
    $minutos_alarme = $hora_alarme * 60 + $minuto_alarme;

    $diferenca_minutos = ($minutos_alarme - $minutos_atual + 1440) % 1440;
    echo "$diferenca_minutos\n";
}
?>
