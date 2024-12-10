<?php

$nome = 'Marilda';
$idade = 44;
$tempoGestação = 28;

function examinar($nome,$idade,$tG) {
    if ($tG >= 6 && $tG <= 8) {
        return ("$nome, $idade anos. exame de sangue e ultrassom para confirmar a idade gestacional.");
    }
    else if ($tG >= 11 && $tG <= 14) {
        return ("$nome, $idade anos. ultrassom morfológico de 1º trimestre, para avaliar riscos de síndromes genéticas.");
    }
    else if ($tG >= 20 && $tG <= 24) {
        return ("$nome, $idade anos. ultrassom morfológico de 2º trimestre, para avaliar as principais estruturas do bebê e rastrear más-formações.");
    }
    else if ($tG >= 26 && $tG <= 28) {
        return ("$nome, $idade anos. ecocardiograma fetal");
    }
    else if ($tG > 28 && $tG <= 36) {
        return ("$nome, $idade anos. exame obstétrico para avaliar crescimento do bebê.");
    }
}

echo examinar($nome, $idade, $tempoGestação);

?>