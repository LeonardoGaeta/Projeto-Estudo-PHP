<?php

    function examinarDoar($idd, $doencaPE) {
        if ($idd > 18 && $idd < 65 && $doencaPE == '') {
            return 'Apta a doar sangue;';
        }
        return 'Não pode doar sangue';
    }

    echo examinarDoar(28, '');

?>