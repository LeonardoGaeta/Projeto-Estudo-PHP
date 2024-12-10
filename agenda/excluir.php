<?php

    require_once './lib/conn.php';

    $id = (int)$_GET['id'];

    $sqlDelet = 'DELETE FROM contato
                    WHERE id = :id';

    $stmt = $conn -> prepare($sqlDelet);
    $stmt -> bindValue(':id', $id);
    $stmt -> execute();
?>

<meta http-equiv="refresh" content="0; url=listar.php">