<?php

    require_once("./lib/conn.php");
    // Include_once/require_once -> o _once serve para pegar só uma vez, ele verifica se o arquivo já foi adicionado.

    foreach($_POST as $chave => $valor) {
        $valor = trim(strip_tags($valor));
        $$chave = $valor;
    }

    // $sql = "INSERT INTO contato(nome, email, telefone) VALUES(:nome, :email, :telefone)";
    $sqlInsert = "INSERT INTO `contato` VALUES(0, :nome, :email, :telefone)";
    
    $stmt = $conn -> prepare($sqlInsert);
    $stmt -> bindValue(':nome', $nome);
    $stmt -> bindValue(':email', $email);
    $stmt -> bindValue(':telefone', $telefone);
    $stmt -> execute();

?>

<meta http-equiv="refresh" content="0; url=formcadastro.php">