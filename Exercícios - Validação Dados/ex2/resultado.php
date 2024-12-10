<?php

    function verificarData ($form) {
        if (!isset($form)) return "PREENCHA O CAMPO DATA";
        foreach ($form as $value) {
            $value = trim(strip_tags($value));
            $data = $value;

            if (empty($value)) return "PREENCHA O CAMPO DATA";
        }

        $data = explode('-', $data);
        if (!checkdate($data[1],$data[2],$data[0])) return "PREENCHA CORRETAMENTE O CAMPO DATA";
        if ($data[0] <= 0) return "DATA INVÁLIDA. ANO DEVE SER MAIOR QUE ZERO";
        return "Data Válida";
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Validação</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg-secondary p-3">
    <?= verificarData($_POST)?>
    </div>
</body>
</html>