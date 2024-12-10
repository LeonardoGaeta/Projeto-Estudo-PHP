<?php

    session_start();
    // Acessa a sessão.

    session_regenerate_id(true);
    // Recria o id, para evitar sequestro de sessão.

    session_unset();
    // Esvazia todos os valores da sessão.

    session_destroy();
    // Destrói a sessão.

    header("Location: index.php");

?>

<!-- Sempre que você quer manipular a sessão, você deve iniciar com session_start() -->