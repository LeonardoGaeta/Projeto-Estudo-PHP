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
        <h1 class="display-4">Exame Pré Natal</h1>
        <form method="post" action="resultado.php">
            <!-- define para onde as informações irão -->

            <div class="form-group mb-3">
                <label for="nome">Nome: </label>
                <input id="nome" class="form-control" type="text" name="nome">
            </div>

            <div class="form-group mb-3">
                <label for="idade">Idade: </label>
                <input id="idade" class="form-control" type="number" name="idade" min="0">
                <!-- define o valor minimo como 0, portanto, não existe idade negativa -->
            </div>

            <div class="form-group mb-3">
                <label for="tempogestacao">Tempo de Gestação: </label>
                <select class="form-select" id="tempogestacao" name="tempogestacao">
                    <option selected>Selecione um opção</option>
                    <option value="1">6 a 8 semanas</option>
                    <option value="2">11 a 14 semanas</option>
                    <option value="3">20 a 24 semanas</option>
                    <option value="4">26 a 28 semanas</option>
                    <option value="5">28 a 36 semanas</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="email">E-mail: </label>
                <input id="email" class="form-control" type="email" name="email">
            </div>

            <div class="form-group mb-3">
                <label for="telefone">Telefone: </label>
                <input id="telefone" class="form-control" type="text" name="telefone">
            </div>

            <div class="form-group mb-3">
                <label for="cep">CEP: </label>
                <input id="cep" class="form-control" type="text" name="cep">
            </div>
            
            <button class="btn btn-outline-primary" type="submit">Enviar</button>
            <button class="btn btn-outline-info" type="reset">Limpar</button>
        </form>
    </div>
</body>
</html>