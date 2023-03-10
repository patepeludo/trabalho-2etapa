<?php
require_once 'banco.php';
require_once 'tabelas.php';
?>
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
      $test = select_cliente();
      foreach ($test as $item) {
        echo "<form action='delete.php' method ='post'>";
        echo "<p>o nome do usuario é: ". $item['nome']. "</p>";
        echo "<p>o cpf do usuario é: ". $item['cpf']. "</p>";
        echo "<p>o gmail do usuario é: ". $item['gmail']. "</p>";
        echo "<p>a forma de pagamento do usuario é: ". $item['forma']. "</p>";
        echo "<p>o comentario do usuario é: ". $item['comentario']. "</p>";
        echo "<input type='hidden' name='id' value='".$item['id']."'>";
        echo "<input type='submit' value='deletar'>";
        echo "<p>---------------------------------------------------------------------</p>";

      }
    ?>
    <a href="2formulario.php">voltar</a>
  </div>
</body>
</html>
