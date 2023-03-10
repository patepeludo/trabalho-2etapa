<?php
require_once 'banco.php';
require_once 'tabelas.php';
?>

<!DOCTYPE html>
<html lang="PT_BR">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
  <header>
  <a href="3pizzaria.php">ir para o site principal</a>
  </header>
  <div id="camarao">
    <h1>Formulário</h1>
  <!-----------------------------------------------------input---------------------------------------------------------------- !-->
  <form action='inserir.php' method="post">
  <div class="form-group">
    <label for="">Insira seu nome<br></label>
    <input type="text"
      class="form-control" name="n1" id="" aria-describedby="helpId" placeholder="Paulinho">
  </div>



  <!-------------------------------------------------cpf-------------------------------------------------------------------- !-->
  <br>
  <div class="form-group">
    <label for="">Insira seu CPF<br></label>
    <input type="number" class="form-control" name="n2" id="" placeholder="333-333-333-33">
  </div>
  <br>
  <!-----------------------------------------------gmail---------------------------------------------------------------------- !-->
    <div class="form-group">
      <label for="">insira seu Gmail <br></label>
      <input type="email" class="form-control" name="n3" id="" aria-describedby="emailHelpId" placeholder="ex@gmail.com">
    </div>
      <br>

<!---------------------------------------------------checkbox------------------------------------------------------------------ !-->

    <div class="form-check form-check-inline" name="n4">

      </label>

 <!-----------------------------------------------radio---------------------------------------------------------------------- !-->
      <div class="form-check" name="n5">
        <br>
        <label class="form-check-label">
          Quais formas de pagamento você pode usar (opcional) <br>
          <?php
          $test = select_pag();
          foreach ($test as $item ) {
            echo "<input type=\"radio\" class=\"form-check-input\" name=\"pag\" id=\"\" value=\"{$item['id_pag']}\">";
            echo $item['forma'];
          }
          ?>
        </label>
      </div>
      <br>

<!-------------------------------------------textarea-------------------------------------------------------------------------- !-->
<div class="form-group" name="n8">
  <label for="">Comentario (opcional)<br></label>
  <textarea class="form-control" name="" id="" rows="3"></textarea>
</div>
<!-----------------------------------------submit---------------------------------------------------------------------------- !-->
      <input type='submit'>
      </div>
</form>

<?php
  if (!empty($_GET['n1']) && !empty($_GET['n2']) && !empty($_GET['n3'])) {
    echo ('<meta http-equiv="refresh" content="0;url=inform.php">');
  }
?>


</body>
</html>