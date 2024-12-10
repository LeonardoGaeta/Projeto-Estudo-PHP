<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Progressão Aritmética</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg-secondary p-3">
        <h1 class="display-4">Progressão Aritmética</h1>
        <form method="post" action="./resultado.php">

            <div class="form-group mb-3">
                <label for="a1">Primeiro Termo (a1): </label>
                <input id="a1" class="form-control" type="number" name="a1">
            </div>

            
            <div class="form-group mb-3">
                <label for="n">Quantidade de termos (n): </label>
                <input id="n" class="form-control" type="number" name="n">
            </div>

            
            <div class="form-group mb-3">
                <label for="r">Razão (r): </label>
                <input id="r" class="form-control" type="number" name="r">
            </div>
            
            <button class="btn btn-outline-primary" type="submit">Enviar</button>
            <button class="btn btn-outline-info" type="reset">Limpar</button>
        </form>
    </div>
</body>
</html>