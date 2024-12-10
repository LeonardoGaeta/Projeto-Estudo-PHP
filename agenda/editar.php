<?php

    require_once './lib/conn.php';

    foreach ($_POST as $chave => $valor) {
        $valor = trim(strip_tags($valor));
        $$chave = $valor;
    }

    $sqlUpdate = "UPDATE contato
                    SET nome = :nome,
                        email = :email,
                        telefone = :telefone
                    WHERE id = :id";

    $stmt = $conn -> prepare($sqlUpdate);
    $stmt -> bindValue(':nome', $nome);
    $stmt -> bindValue(':email', $email);
    $stmt -> bindValue(':telefone', $telefone);
    $stmt -> bindValue(':id', $id);
    $stmt -> execute();

?>
<meta http-equiv="refresh" content="0; url=listar.php">
