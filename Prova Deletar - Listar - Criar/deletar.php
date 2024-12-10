<?php
require_once 'config.php';

$id = (int)$_GET["id"];

$sqlDel = "DELETE FROM tarefas WHERE id = :id";
$stmt = $pdo -> prepare($sqlDel);
$stmt -> bindValue (":id", $id);
$stmt -> execute();
?>

<meta http-equiv="refresh" content="0; url=index.php">