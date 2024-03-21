<?php
while (fscanf(STDIN, "%d", $numero_lesmas) == 1) {
    $velocidades = explode(" ", fgets(STDIN));

    $maior_velocidade = 0;

    // Encontra a velocidade máxima entre as lesmas do grupo
    foreach ($velocidades as $velocidade) {
        $velocidade = intval($velocidade);
        if ($velocidade > $maior_velocidade) {
            $maior_velocidade = $velocidade;
        }
    }

    // Determina o nível de velocidade da lesma mais veloz
    if ($maior_velocidade < 10) {
        echo "1\n";
    } elseif ($maior_velocidade < 20) {
        echo "2\n";
    } else {
        echo "3\n";
    }
}
?>