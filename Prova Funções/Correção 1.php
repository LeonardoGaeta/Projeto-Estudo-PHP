<!-- CORREÇÃO NÃO SIGNIFICA QUE O QUE EU FIZ TA ERRADO, ESSA É A FORMA QUE O PROFESSOR FEZ!!! -->

<?php

    function calcularPedido($cod, $qnt) {
        switch ($cod) {
            case 100:   $resultado = $qnt * 1.2;  break;
            case 101:   $resultado = $qnt * 1.3;  break;
            case 102:   $resultado = $qnt * 1.5;  break;
            case 103:   $resultado = $qnt * 1.2;  break;
            case 104:   $resultado = $qnt * 1.3;  break;
            case 105:   $resultado = $qnt * 1;    break;

            default:    $resultado = "Código inválido"; break;
        }
        return $resultado;
    }

    $pedido = calcularPedido(102, 2);
    echo $pedido;

?>