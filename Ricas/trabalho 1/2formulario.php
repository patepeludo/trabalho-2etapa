<!DOCTYPE html>
<html lang="PT_BR">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
  <div id="camarao">
    <h1>Formulário</h1>
  <!-----------------------------------------------------input---------------------------------------------------------------- !-->
  <form action='2formulario.php' method="get">
  <div class="form-group">
    <label for="">Insira seu nome<br></label>
    <input type="text"
      class="form-control" name="n1" id="" aria-describedby="helpId" placeholder="Paulinho">
  </div>



  <!-------------------------------------------------password-------------------------------------------------------------------- !-->
  <br>
  <div class="form-group">
    <label for="">Insira seu CPF<br></label>
    <input type="password" class="form-control" name="n2" id="" placeholder="333-333-333-33">
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
      <label class="form-check-label">
        qual a sua idade (opcional) <br>
        <input class="form-check-input" type="checkbox" name="" id="" value="checkedValue"> menos de 18 anos
      </label>
    </div>
    <div class="form-check form-check-inline">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="" id="" value="checkedValue"> 18 a 24
      </label>
    </div>
    <div class="form-check form-check-inline">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="" id="" value="checkedValue"> 24 a 40
      </label>
    </div>
    <div class="form-check form-check-inline">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="" id="" value="checkedValue"> 40+
      </label>

 <!-----------------------------------------------radio---------------------------------------------------------------------- !-->
      <div class="form-check" name="n5">
        <br>
        <label class="form-check-label">
          Quais formas de pagamento você pode usar (opcional) <br>
          <input type="radio" class="form-check-input" name="" id="" value="checkedValue">
          Cartão de débito
        </label>
      </div>
    </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="" id="" value="checkedValue">
          Cartão de crédito
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="" id="" value="checkedValue">
          Dinheiro a mão
        </label>
      </div>
      <div required class="form-check">
        <label class="form-check-label">
          <input  type="radio" class="form-check-input" name="" id="" value="checkedValue">
          Pix
        </label>
      </div>
      <br>
 <!----------------------------------------------checkbox----------------------------------------------------------------------- !-->
 <div class="form-check" name="n6">
   <label class="form-check-label"> Qual seu nivel de ensino (opcional)<br>
     <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
     Ensino fudamental<br>
   </label>
   <label class="form-check-label">
     <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
     Ensino Médio<br>
   </label>
   <label class="form-check-label">
     <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
     Ensino superior<br>
   </label>
   <label class="form-check-label">
     <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
     Curso tecnico<br>
   </label>
<!-----------------------------------------------------from/group---------------------------------------------------------------- !-->
<br>
      <div class="form-group" name="n7">
        <label for="">situação atual (opcional)<br></label>
        <select multiple class="form-control" name="" id="">
          <option>Solteiro/a</option>
          <option>Namorando/a</option>
          <option>Casado/a</option>
          <option>Viuvo/a</option>
        </select>
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
  <p>necessario preencher os campos obrigatorios</p>
</form>
<?php
  if (!empty($_GET['n1']) && !empty($_GET['n2']) && !empty($_GET['n3'])) {
    echo ('<meta http-equiv="refresh" content="0;url=3pizzaria.php">');
  }
?>


</body>
</html>