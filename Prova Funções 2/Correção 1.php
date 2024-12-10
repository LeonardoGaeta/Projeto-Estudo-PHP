<!-- CORREÇÃO NÃO SIGNIFICA QUE O QUE EU FIZ TA ERRADO, ESSA É A FORMA QUE O PROFESSOR FEZ!!! -->

<?php

    function calcularPA($a1, $n, $r) {
        $an = $a1+($n-1)*$r;

        return $an;
    }

    $an = calcularPA(1, 10, 2);

    echo $an;

?>