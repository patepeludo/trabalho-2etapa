<!DOCTYPE html>
<html lang="PT_BR">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="camarao">
    <h1>Informações do Formulário</h1>
    <?php
      if (!empty($_POST['n1']) && !empty($_POST['n2']) && !empty($_POST['n3'])) {
        echo "<p>Nome: ".$_POST['n1']."</p>";
        echo "<p>CPF: ".$_POST['n2']."</p>";
        echo "<p>E-mail: ".$_POST['n3']."</p>";
        if (!empty($_POST['n4'])) {
          echo "<p>Formas de Pagamento:</p>";
          if ($_POST['n4'] == 'credito') {
            echo "<p>- Cartão de crédito</p>";
          } elseif ($_POST['n4'] == 'debito') {
            echo "<p>- Cartão de débito</p>";
          } elseif ($_POST['n4'] == 'dinheiro') {
            echo "<p>- Dinheiro a mão</p>";
          } elseif ($_POST['n4'] == 'pix') {
            echo "<p>- Pix</p>";
          }
        }
        if (!empty($_POST['n8'])) {
          echo "<p>Comentário:</p>";
          echo "<p>".$_POST['n8']."</p>";
        }
      } else {
        echo "<p>Nenhuma informação foi enviada.</p>";
      }
    ?>
    <a href="2formulario.php">voltar</a>
  </div>
</body>
</html>
