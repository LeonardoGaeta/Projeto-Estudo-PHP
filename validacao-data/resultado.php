<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-dark bg-success">
      <div class="container-fluid">
        <a href="index.php" class="navbar-brand">Home</a>
      </div>
    </nav>
  </header>

  <div class="container">
    <?php
    
      $erro = false;
      if (empty($_POST) || !isset($_POST)) {
        $erro = "Dados Vazios.";
      }

      if (!$erro) {
        foreach ($_POST as $key => $value) {
          $value = trim(strip_tags($value));
          $$key = $value;
          if (empty($value)) {
            $erro .= "O campo $key Está em branco <br>";
          }
        }
      }

      if (!$erro && !ctype_digit($tp_veiculo)) {
        $erro = "Utilize um valor numérico";
      }
      
      $dataIni = explode('-', $dtinicial);
      
      if (!$erro && !checkdate($dataIni[1], $dataIni[2], $dataIni[0])) {
        $erro = "Ajeita essa data inicial.";
      }
      
      $dataFin = explode('-', $dtfinal);

      if (!$erro && !checkdate($dataFin[1], $dataFin[2], $dataFin[0])) {
        $erro = "Ajeita essa data final.";
      }

      if ($erro) {
        echo $erro;
      }
      else {
        $dt_Inicial = new DateTime($dtinicial);
        $dt_Final = new DateTime($dtfinal);

        $dias = $dt_Inicial -> diff($dt_Final);
        $aluguel = $tp_veiculo * $dias -> format('%a');

        echo "Valor do aluguel: $aluguel";
      }

    ?>
    <?= $erro?>
  </div>
</body>

</html>