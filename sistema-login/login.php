<?php
    
    require_once "config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST as $chave => $valor) {
            $valor = trim(strip_tags($valor));
            $$chave = $valor;
        }
    }

    $sql = "SELECT * FROM usuarios WHERE email = :email";

    $stmt = $conn->prepare($sql);
    $stmt-> bindValue(":email", $email);
    $stmt-> execute();

    if ($stmt->rowCount() === 1) {
        $usuario = $stmt->fetch(PDO::FETCH_OBJ);

        if (password_verify($password, $usuario->senha)) {
            session_start();
            // a primeira vez que session_start é executado, ele cria. Depois disso, ele vai acessar.

            $_SESSION["loggedin"] = true; 
            $_SESSION["usuario"] = $usuario->nome;
            header("Location: site.php"); 
        }
    }

    $conn = null;


    echo "Usuário ou senha incorretos";
    header("Refresh:5; url='index.php'");

?>
