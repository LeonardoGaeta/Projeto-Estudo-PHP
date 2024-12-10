<?php

function mostrarExame($tempoGestacao){
    switch($tempoGestacao){
        case 2: return "Ultrassom morfológico de 1º trimestre, para avaliar riscos de síndromes genéticas."; 
        case 3: return "Ultrassom morfológico de 2º trimestre, para avaliar as principais estruturas do bebê e rastrear más-formações."; 
        case 4: return "Ecocardiograma fetal"; 
        case 5: return "Exame obstétrico para avaliar crescimento do bebê."; 
        default: return "Exame de sangue e ultrassom para confirmar a idade gestacional."; 
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exame Pré Natal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg-secondary p-3">

    <?= mostrarExame($_POST["tempogestacao"])?>
    </div>
</body>
</html>




