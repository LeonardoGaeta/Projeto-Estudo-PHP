<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doador Sangue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg-secondary p-3">
        <h1 class="display-4">Doador Sangue</h1>
        <form method="post" action="./resultado.php">

            <div class="form-group mb-3">
                <label for="nome">Nome: </label>
                <input id="nome" class="form-control" type="text" name="nome">
            </div>

            <div class="form-group mb-3">
                <label for="idade">Idade: </label>
                <input id="idade" class="form-control" type="number" name="idade">
            </div>

            <div class="row">
                <div class="form-group mb-3 col-4">
                    <label for="tiposangue">Tipo Sanguíneo: </label>
                    <select class="form-select" id="tiposangue" name="tiposangue">
                        <option selected>Selecione um opção</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </div>
                <div class="form-group mb-3 col-4">
                    <label for="fatorrh">Fator rH: </label>
                    <select class="form-select" id="fatorrh" name="fatorrh">
                        <option selected>Selecione um opção</option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                    </select>
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="doencapreexistente">Doenças Pré Existentes: </label>
                <select class="form-select" id="doencapreexistente" name="doencapreexistente">
                    <option selected>Selecione um opção</option>
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="email">E-mail: </label>
                <input id="email" class="form-control" type="email" name="email">
            </div>
            
            <button class="btn btn-outline-primary" type="submit">Enviar</button>
            <button class="btn btn-outline-info" type="reset">Limpar</button>
        </form>
    </div>
</body>
</html>