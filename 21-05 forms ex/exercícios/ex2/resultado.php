<?php

    function doarSangue($sangue, $doenca, $idade) {
        if(($doenca || $idade < 18) || ($idade > 65)) return "Não pode doar";

        switch($sangue) {
            case "A+": return "AB+ e A+";
            case "A-": return "A+, A-, AB+ e AB-";
            case "B+": return "B+ e AB+";
            case "B-": return "B+, B-, AB+ e AB-";
            case "AB+": return "AB+";
            case "AB-": return "AB+ e AB-";
            case "O+": return "A+, B+, O+ e AB+";
            default: return "Todos (doador universal)";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doador Sangue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg-secondary p-3">
        <?php
            $sangue = $_POST["tiposangue"].$_POST["fatorrh"];
        ?>
        <p class="fs-2"><?= doarSangue($sangue, $_POST["doencapreexistente"], $_POST["idade"]);?></p>
    </div>
</body>
</html>