<?php

$a1 = 5;
$n = 10;
$r = 2;

function progressao($a1,$n,$r) {
    $an = $a1+($n-1)*$r;
    return $an;
}

echo progressao($a1,$n,$r);

?>