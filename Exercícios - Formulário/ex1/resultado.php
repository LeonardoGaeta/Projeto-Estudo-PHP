<?php

    function ordenarNum($num) {
        sort($num);
        return "$num[0], $num[1], $num[2]";
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exame Pré Natal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg-secondary p-3">
        <p><?= ordenarNum($_POST); ?></p>
    </div>
</body>
</html>