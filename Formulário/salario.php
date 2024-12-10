<?php
    function calcularSalario($horasTrab, $valorHora) {
        if ($horasTrab > 160) {
            return ($valorHora*160)+(($horasTrab-160) * ($valorHora*1.5));
        }
        
        return ($horasTrab*$valorHora);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cálculo Salário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg-secondary p-3">
        <p class="h4">R$ <?= calcularSalario($_POST['horasTrabalhadas'], $_POST['valorHora']);?></p>
    </div>
</body>
</html>