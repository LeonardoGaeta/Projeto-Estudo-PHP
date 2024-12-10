<?php

    function mostrarExameGestacao($nome, $idade, $tempoGestacao) {
        $exame = NULL;
        if ($tempoGestacao >= 6 && $tempoGestacao <= 8) $exame = 'exame de sangue e ultrassom para confirmar a idade gestacional.';
        else if ($tempoGestacao >= 11 && $tempoGestacao <= 14) $exame = 'ultrassom morfológico de 1º trimestre, para avaliar riscos de síndromes genéticas.';
        else if ($tempoGestacao >= 20 && $tempoGestacao <= 24) $exame = 'ultrassom morfológico de 2º trimestre, para avaliar as principais estruturas do bebê e rastrear más-formações.';
        else if ($tempoGestacao >= 26 && $tempoGestacao <= 28) $exame = 'ecocardiograma fetal';
        else if ($tempoGestacao > 28 && $tempoGestacao <= 36) $exame = 'exame obstétrico para avaliar crescimento do bebê.';


        echo "$nome de $idade anos, precisa fazer tal exame: $exame ";
    }
    mostrarExameGestacao('Weldell Odiável', '49', 29);

?>