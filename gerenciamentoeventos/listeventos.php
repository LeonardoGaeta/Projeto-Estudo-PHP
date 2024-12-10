<?php
require_once 'lib/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST["nome"])){
    $nome = '%' . $_POST['nome'] . '%';
   // Adiciona caracteres para busca parcial

    // Consulta para pesquisar eventos pelo nome
    $stmt = $conn->prepare("SELECT * FROM eventos WHERE nome LIKE :nome");
    $stmt->bindValue(':nome', $nome);
    $stmt->execute();
  } else{
    $dataInicial = $_POST['data_inicial'];
    $dataFinal = $_POST['data_final'];

    $timestampInicial = strtotime($dataInicial);
    $timestampFinal = strtotime($dataFinal);

    // Verifica se a data inicial é maior que a data final
    if ($timestampInicial > $timestampFinal) {
        $msg = "A data inicial é maior que a data final";
    } 
    
    // Consulta para pesquisar eventos entre as datas
    $stmt = $conn->prepare("SELECT * FROM eventos WHERE data BETWEEN :dataInicial AND :dataFinal");
    $stmt->bindValue(':dataInicial', $dataInicial);
    $stmt->bindValue(':dataFinal', $dataFinal);
    $stmt->execute();
  
  }
  
}
else{
  $sql = "SELECT * FROM eventos";
  $stmt = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="pt-br" data-theme="aqua">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Banco Gerenciador de Eventos</title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
  <div class="navbar bg-base-100">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
          <li><a href="listeventos.php">Listar Eventos</a></li>
          <li><a href="listlocais.php">Listar Locais</a></li>
          <li><a href="listparticipantes.php">Listar Participantes</a></li>
        </ul>
      </div>
      <a href="./" class="btn btn-ghost text-xl">Banco Gerenciador de Eventos</a>
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
      <li><a href="listeventos.php">Listar Eventos</a></li>
          <li><a href="listlocais.php">Listar Locais</a></li>
          <li><a href="listparticipantes.php">Listar Participantes</a></li>
      </ul>
    </div>
  </div>

  <div class="container mx-auto">
    <h1 class="text-primary mb-3">Listagem de Eventos</h1>
    <div class="overflow-x-auto">
      <details class="collapse collapse-plus bg-base-200">
        <input type="checkbox" />
        <summary class="collapse-title text-xl font-medium">Filtros</summary>
        <div class="collapse-content">
          <form method="post" action="" class="mb-8">
            <input
              type="text"
              placeholder="Nome do evento"
              class="input input-bordered input-primary" 
              name="nome"/>
            <button type="submit" class="btn btn-outline">🔍</button>
          </form>
          <form method="post" action="">
            <label for="data_inicial">Data Inicial:</label>
            <input type="date" class="input input-bordered input-primary" name="data_inicial">
            
            <label for="data_final">Data Final:</label>
            <input type="date" class="input input-bordered input-primary" name="data_final">
            
            <button type="submit" class="btn btn-outline">🔍</button>
          </form>
        </div>
      </details>
      
      <table class="table">
        <!-- head -->
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Data</th>
            <th>Descrição</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            if ($stmt->rowCount() > 0) {
              $eventos = $stmt->fetchAll(PDO::FETCH_OBJ);
              $conn = null;
              foreach ($eventos as $evento) {
          ?>
          <tr>
            <td><?=htmlspecialchars($evento->id_evento)?></td>
            <td><?=htmlspecialchars($evento->nome)?></td>
            <td><?=htmlspecialchars(date('d/m/Y',strtotime($evento->data)))?></td>
            <td><?=htmlspecialchars($evento->descricao)?></td>
          </tr>
          <?php
              }
            } else if(isset($msg)){
          ?>
          <tr>
            <td colspan="4" class="text-center"><?=$msg?></td>
          </tr>
          <?php
            } else{
          ?>
          <tr>
            <td colspan="4" class="text-center">Nenhum evento encontrado</td>
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>