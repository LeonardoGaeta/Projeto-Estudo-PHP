<?php

    $a = 15;
    $b = 8;
    $c = 7;
    
    function somar($a,$b,$c) {
        $abc = $a+$b+$c;
        $par = 0;
        $impar = 0;
        for ($i = 1 ; $i <= $abc ; $i++) {
            if ($i % 2 != 0) {
                $impar += $i;
            }
            else {
                $par += $i;
            }
        }
        return ['par' => $par, 'impar' => $impar];
    }

    echo somar($a,$b,$c)['par']. '<br>';
    echo somar($a,$b,$c)['impar'];

?>