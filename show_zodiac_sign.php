<?php
include('layouts/header.php');

if (!isset($_POST['data_nascimento'])) {
  echo "<p class='text-center mt-5'>Data de nascimento não informada.</p>";
  exit;
}

$data_nascimento = $_POST['data_nascimento']; 

$dataFormatada = date("d/m", strtotime($data_nascimento));

$signos = simplexml_load_file("signos.xml");

$signoEncontrado = null;

function converterParaTimestamp($data) {
  list($dia, $mes) = explode("/", $data);
  return strtotime("2000-$mes-$dia");
}

$timestampNascimento = converterParaTimestamp($dataFormatada);

foreach ($signos->signo as $signo) {
  $inicio = converterParaTimestamp($signo->dataInicio);
  $fim = converterParaTimestamp($signo->dataFim);

  if ($fim < $inicio) {
    if ($timestampNascimento >= $inicio || $timestampNascimento <= $fim) {
      $signoEncontrado = $signo;
      break;
    }
  } else {
    if ($timestampNascimento >= $inicio && $timestampNascimento <= $fim) {
      $signoEncontrado = $signo;
      break;
    }
  }
}
?>

<div class="container mt-5">
  <?php if ($signoEncontrado): ?>
    <div class="card mx-auto" style="max-width: 500px;">
      <div class="card-body">
        <h2 class="card-title text-center"><?php echo $signoEncontrado->signoNome; ?></h2>
        <p class="card-text text-center"><?php echo $signoEncontrado->descricao; ?></p>
        <a href="index.php" class="btn btn-secondary w-100 mt-3">Voltar</a>
      </div>
    </div>
  <?php else: ?>
    <p class="text-center">Signo não encontrado para a data informada.</p>
    <div class="text-center mt-3">
      <a href="index.php" class="btn btn-secondary">Tentar novamente</a>
    </div>
  <?php endif; ?>
</div>

</body>
</html>
