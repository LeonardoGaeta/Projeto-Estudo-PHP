<?php

    $cardapio = [
        100 => 1.20,
        101 => 1.30,
        102 => 1.50,
        103 => 1.20,
        104 => 1.30,
        105 => 1
    ];





    function calcularPagamento($cod,$qnt,$cardapio) {
        return ($cardapio[$cod] * $qnt);
    }




    echo 'R$ '. calcularPagamento(101,3,$cardapio);

?>