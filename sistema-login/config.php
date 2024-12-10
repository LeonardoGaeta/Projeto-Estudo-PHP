<?php
    $drivername = "mysql";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";


    try {
        $conn = new PDO("$drivername:host=$servername;dbname=$dbname",$username,$password);
    } catch(PDOException $err){
        echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado: " . $err->getMessage();
    }