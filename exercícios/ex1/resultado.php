<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Triangulo Equilátero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="import" href="./lib/function">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg-secondary p-3 text-white">
    <?php
    
    require ("../lib/function.php");

    $erro = false;

        if (empty($_POST) || !isset($_POST)) $erro = "O formulário está vazio";
        foreach ($_POST as $indice => $valor) {
            $valor = trim(strip_tags($valor));
            $$indice = $valor;

            if (empty($valor) && !$erro) {
                $erro .= "O campo $indice está vazio <br>";
            }

            if (!$erro) $erro = validarNum($valor);
        }

        if ($erro) print $erro;
        elseif (($num1 == $num2) && ($num2 == $num3)) {
            print "Equilátero";
        }

    ?>
    </div>
</body>
</html>