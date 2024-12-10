<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulário Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bg-secondary p-3">
        <h1 class="display-4">Formulário Cadastro</h1>
        <form method="post" action="./resultado.php">

            <div class="form-group mb-3">
                <label for="nome">Nome: </label>
                <input id="nome" class="form-control" type="text" name="nome">
            </div>

            <div class="form-group mb-3">
                <label for="datanascimento">Data de Nascimento: </label>
                <input id="datanascimento" class="form-control" type="date" name="datanascimento" max="2030-12-31">
            </div>

            <div class="form-group mb-3">
                <label for="email">E-mail: </label>
                <input id="email" class="form-control" type="text" name="email">
            </div>

            <div class="form-group mb-3">
                <label for="telefone">Telefone: </label>
                <input id="telefone" class="form-control" type="text" name="telefone">
            </div>

            <div class="form-group mb-3">
                <label for="senha">Senha: </label>
                <input id="senha" class="form-control" type="password" name="senha">
            </div>
            
            <button class="btn btn-outline-primary" type="submit">Enviar</button>
            <button class="btn btn-outline-info" type="reset">Limpar</button>
        </form>
    </div>
</body>
</html>