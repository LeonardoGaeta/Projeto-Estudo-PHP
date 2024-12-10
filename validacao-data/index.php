<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aluguel de Carros</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-light bg-warning">
      <div class="container-fluid">
        <a href="index.php" class="navbar-brand">Home</a>
      </div>
    </nav>
  </header>

  <div class="container">
    <form action="resultado.php" method="post" class="my-3">
      <legend>Aluguel de Carros</legend>
      <div class="row">
        <div class="col-8">
          <label for="tp_veiculo" class="form-label">Tipo de veículo: </label>
          <select class="form-select mb-3" name="tp_veiculo" id="tp_veiculo">
            <option>Selecione uma opção</option>
            <option value="100">Econômico</option>
            <option value="250">Intermediário</option>
            <option value="1000">Luxo</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label for="dtinicial" class="form-label">Data de Início: </label>
          <input type="date" name="dtinicial" id="dtinicial" class="form-control mb-3" min="">
        </div>
        <div class="col-4">
          <label for="dtfinal" class="form-label">Data de Devolução: </label>
          <input type="date" name="dtfinal" id="dtfinal" class="form-control" min="">
        </div>
      </div>
      
      <div class="col-6">
        <button type="submit" class="btn btn-outline-warning">Enviar</button>
      </div>
    </form>
  </div>
</body>
</html>