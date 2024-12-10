<?php

    function TestarVeracidadeTriangulo($form) {
        $erro = NULL;

        if (empty($form) || !isset($form)) $erro = "PREENCHA TODOS OS CAMPOS";
        foreach ($form as $key => $value) {
            $value = trim(strip_tags($value));
            $$key = $value;

            if (empty($value) || !ctype_digit($value)) $erro .= "PREENCHA CORRETAMENTE O CAMPO $key";
        }

        if ($erro) return $erro;
        if (($num1 == $num2) && ($num2 == $num3)) return "Esses valores formam um triângulo esquilátero";
        else return "Esses valores não formam um triângulo equilátero";
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Triangulo Equilátero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg-secondary p-3">
        <?=TestarVeracidadeTriangulo($_POST)?>
    </div>
</body>
</html>