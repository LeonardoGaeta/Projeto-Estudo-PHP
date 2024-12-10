<?php
require_once 'config.php';

$sqlDel = "DELETE FROM tarefas";

$stmt = $pdo -> query($sqlDel);

?>

<meta http-equiv="refresh" content="0; url=index.php">