<?php

    $a = 15;
    $b = 8;
    $c = 7;

    $abc = $a. $b. $c;


    function calcularNovoSalario($plano, $salarioAt) {
        $tabela = [
            1 => 0.1,
            2 => 0.15,
            3 => 0.20,
        ];

        return ($tabela[$plano]*$salarioAt)+$salarioAt;
    }

    echo calcularNovoSalario(1, $abc)


?>