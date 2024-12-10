<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ordenação Crescente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg-secondary p-3">
        <h1 class="display-4">Ordenação Crescente</h1>
        <form method="post" action="./resultado.php">

            <div class="form-group mb-3">
                <label for="num1">1º número: </label>
                <input id="num1" class="form-control" type="number" name="num1">
            </div>

            <div class="form-group mb-3">
                <label for="num2">2º número: </label>
                <input id="num2" class="form-control" type="number" name="num2">
            </div>

            <div class="form-group mb-3">
                <label for="num3">3º número: </label>
                <input id="num3" class="form-control" type="number" name="num3">
            </div>

            <button class="btn btn-outline-primary" type="submit">Enviar</button>
            <button class="btn btn-outline-info" type="reset">Limpar</button>
        </form>
    </div>
</body>
</html>