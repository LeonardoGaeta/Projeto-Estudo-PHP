<?php
    // session_set_cookie_params([
    //     'lifetime' => 0,
    //     'path' => '/',
    //     'domain' => $_SERVER['HTTP_HOST'],
    //     'secure' => true,
    //     'httponly' => true,
    //     'samesite' => 'Strict'
    // ]);

    session_start();
    session_regenerate_id(true);
    // Sempre que for acessar uma sessão já existente, é bom recriar seu ID para evitar o sequestro de sessão. Quem faz isso é o session_regenerate_id(true).

    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("Location: index.php");
        exit;

        // Aqui ele está verificando se caso a sessão não foi criada, ou seja, não foi inicializada, ou, se a pessoa não está logada. Ele vai te mandar de volta para o index.php e para a execução do script, com o exit.
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Web Site</title>
</head>
<body>
    <h1><?=$_SESSION["usuario"]?> está logado!</h1>

    <a href="logout.php">logout</a>


</body>
</html>