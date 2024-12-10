<?php
    require_once './config.php';

    $sqlSel = "SELECT * FROM tarefas";
    $stmt = $pdo -> query($sqlSel);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Tarefas</h2>

        <!-- Formulário para adicionar tarefa -->
        <form action="cadastrar.php" method="POST" class="mb-4">
            <div class="input-group">
                <input type="text" class="form-control" name="descricao" placeholder="Nova tarefa" required>
                <button class="btn btn-primary" name="adicionar" type="submit">Adicionar</button>
            </div>
        </form>

        <!-- Exibição das tarefas -->
        <div class="row">
            
                <!-- Modelo de card para colocar no foreach  -->
                <?php 
                    if ($stmt -> rowCount() != 0) {
                        $tarefas = $stmt -> fetchAll(PDO::FETCH_OBJ);
                        foreach($tarefas as $tarefa) {
                ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><?= $tarefa -> descricao?></p>
                            <p class="card-text"><?= date('d/m/Y H:i', strtotime($tarefa -> data_criacao)) ?></p>
                            <a href="deletar.php?id=<?=$tarefa -> id?>" class="btn btn-danger btn-sm">Excluir</a>
                        </div>
                    </div>
                </div>
                <?php 
                        }
                    }
                    else {
                ?>
                    <div class="col-md-4 mb-3">
                        <p class="text-info">
                            Sua lista está vazia ! 
                        </p>
                    </div>
                <?php
                    }
                ?>
                
                
                <!-- Fim Modelo -->

        </div>

        <!-- Limpar todas as tarefas -->
        <a href="limpar.php" class="btn btn-warning">Limpar todas as tarefas</a>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>
