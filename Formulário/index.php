<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cálculo Salário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg-secondary p-3">
        <h1 class="display-4">Cálculo Salário</h1>
        <form method="post" action="salario.php">

            <div class="form-group mb-3">
                <label for="horasTrabalhadas">Horas Trabalhadas: </label>
                <input id="horasTrabalhadas" class="form-control" type="number" name="horasTrabalhadas" min="0">
            </div>
            <div class="form-group mb-3">
                <label for="valorHora">Valor Hora: </label>
                <input id="valorHora" class="form-control" type="number" name="valorHora" min="0" max="" step="0.01">
            </div>
            
            <button class="btn btn-outline-primary" type="submit">Enviar</button>
            <button class="btn btn-outline-info" type="reset">Limpar</button>
        </form>
    </div>
</body>
</html>