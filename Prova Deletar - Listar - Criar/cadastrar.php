<?php
require_once 'config.php';

    foreach ($_POST as $key => $val) {
        $val = trim(strip_tags($val));
        $$key = $val;
    }

    $sqlInsert = "INSERT INTO tarefas (descricao) VALUES(:descricao)";
    $stmt = $pdo -> prepare($sqlInsert);
    $stmt -> bindValue(":descricao", $descricao);
    $stmt -> execute();
?>

<meta http-equiv="refresh" content="0; url=index.php">