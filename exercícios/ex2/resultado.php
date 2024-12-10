<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Validação</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="import" href="./lib/function">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg-secondary p-3 text-white">
    <?php
    
    require ("../lib/function");

    $erro = false;
    if (empty($_POST) || !isset($_POST)) {
        $erro = "Preencha a data";
    }

    $data = explode("-",$_POST["date"]);

    if (!$erro) $erro = validarNum($data[0]);

    if ($erro) print $erro;
    else print "Está certinho";

    ?>
    </div>
</body>
</html>