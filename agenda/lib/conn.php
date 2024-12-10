<?php

// DSN = Data Source Name -> Informações do Banco.
// SGBD: de onde vem; qual é

    $conn = new PDO('mysql:host=localhost;dbname=agenda','root','');


    // PDO(DSN, usuário, senha)
    // PDO -> PHP DATA OBJECT -> abstração da SGBD -> Sistema Gerenciador de Banco de Dados -> Tipo de banco de dados
    // Abstraindo o SGBD, pode ser qualquer. MySQL, sqllite, pgsql, firebase, etc...