</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<!--------------------------------------------------------------------------------------------------------------------- !-->

<body>
  <img src="pizzariafortaleza.jpg" href="pizzariafortaleza.jpg">
  <form action='1teladelogin.php' method="get">
    <div>
      Username/login: <input type="text" name="n1" placeholder='paulinho'><br>
      Senha: <input type="text" name="n2" placeholder='senha maneira'><br>
      <input id="tatublindado" type="submit">
      <input hidden type="text"><br>
    </div>
  </form>
</body>

<!--------------------------------------------------------------------------------------------------------------------- !-->

<?php

if ($_GET['n1'] == "123" and $_GET['n2'] == "123") {
  header("location: 2formulario.php");
}
if ($_GET['n1'] != "123" || $_GET['n2'] != "123") {
  print ('<p>senha ou login incorreto</p>');
}
?>
<!--------------------------------------------------------------------------------------------------------------------- !-->