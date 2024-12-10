<?php

    function calcularEnesimo($a1, $n, $r) {
        if ($a1 == "" || $n == "" || $r == "") return $a1;
        return $a1 + ($n - 1) * $r;
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Progressão Aritmética</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg-secondary p-3">
        <?php
            $a1 = $_POST["a1"];
            $n = $_POST["n"];
            $r = $_POST["r"];
        ?>
        <p><?= calcularEnesimo($a1, $n, $r);?></p>
    </div>
</body>
</html>