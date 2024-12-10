<!-- criando funcoes -->
<?php

    function somar($a,$b) {
        echo $a + $b;
    }
    

    // PascalCase
    function SubtrairNumeros($a,$b) {
        echo $a - $b;
    }

    // snake_case
    function multiplicar_numeros($a,$b) {
        echo $a * $b;
    }

    // camelCase
    function dividirNumeros($a,$b) {
        echo $a / $b;
    }

    function recepcionarUsuario($nome = "Wendell") {
        echo "Ola $nome <br>";
    }

    function saudarPessoa($nome = null) {
        echo "Ola $nome <br>";
    }

?>

<!-- chamndo funcoes -->
<?php

    somar(2,3);
    echo "<br>";
    SubtrairNumeros(2,3);
    echo "<br>";
    multiplicar_numeros(2,3);
    echo "<br>";
    dividirNumeros(4,2);
    echo "<br>";

    recepcionarUsuario();
    recepcionarUsuario("Morra");
    saudarPessoa("Suma");
    saudarPessoa();

?>

<!-- funcao anonima -->
<?php

    $saudacao = function($nome) {
        echo "Ola $nome <br>";
    };

    $saudacao('Roario');

    echo function_exists("somar");

?>