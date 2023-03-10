<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style3.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizzaria</title>
</head>

<body>
  <header>
    <a href="1teladelogin.php">ir para o login</a> <br>
    <a href="2formulario.php">ir para o formulario</a>
  </header>
  <h1>Cardápio</h1>

  <div id='ai'>
    <a id="aooa"><br>Pizza de calabresa <br></a>
    <img onmouseenter="bigImg(this)" onmouseleave="normalImg(this)" src='Pizza-Calabresa..webp'>
  </div>

  <div id='camarao'>
    <a id="aooa"><br>Pizza de portuguesa <br></a>
    <img onmouseenter="bigImg(this)" onmouseleave="normalImg(this)" src='unnamed.jpg'>
  </div>
  <footer>
    <h1>PROMOÇÃO R$50 UMA PIZZA FAMILIA COM REFRIGERANTE 2L</h1>
    <div id="coa">
      <p>R$25 A pizza média</p>
      <p>R$35 A pizza grande</p>
      <p>R$45 A pizza familia</p>
    </div>
  </footer>
  <script>
    function bigImg(x) {
      x.style.height = "560px";
      x.style.width = "660px";
    }

    function normalImg(x) {
      x.style.height = "400px";
      x.style.width = "500px";
    }
  </script>

</body>

</html>