<?php

require_once "config.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $chave => $valor) {
        $valor = trim(strip_tags($valor));
        $$chave = $valor;
    }


    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    

    $sqlInsert = "INSERT INTO usuarios VALUES (0,:nome,:email,:password)";

    $stmt = $conn->prepare($sqlInsert);
    $stmt->bindValue(':nome',$nome);
    $stmt->bindValue(':email',$email);
    $stmt->bindValue(':password',$hashed_password);
    

    if ($stmt->execute()) {
        echo "Usuário criado com sucesso";
    } else {
        echo "Erro: " . $conn->errorInfo();
    }

    
    $conn = null;
}

header("Refresh:0; url='index.php'");
?>
