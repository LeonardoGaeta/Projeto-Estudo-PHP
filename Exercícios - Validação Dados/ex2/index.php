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
        <h1 class="display-5">Formulário</h1>
        <form method="post" action="resultado.php">

            <div class="form-group mb-3">
                <label for="data">Data: </label>
                <input id="data" class="form-control" type="date" name="data">
            </div>
            
            <button class="btn btn-outline-primary" type="submit">Enviar</button>
            <button class="btn btn-outline-info" type="reset">Limpar</button>
        </form>
    </div>
</body>
</html>