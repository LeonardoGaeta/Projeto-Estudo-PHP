<?php
    function verificarSenha($senha) {
        $tamanhoSenha = strlen($senha);

        if ($tamanhoSenha < 8 || $tamanhoSenha > 20) return "Sua senha deve estar entre 8 e 20 caracteres";
        return "Senha ok";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulário Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg-secondary p-3">
    <p class="fs-2"><?= verificarSenha($_POST["senha"])?></p>
    </div>
</body>
</html>