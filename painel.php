<?php
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/c766cb3ea7.js"></script>

  <title><?php echo $_SESSION['nome'];?> - Disney Pizza</title>



</head>
  <body>
    <nav id="menu" class="navbar navbar-expand-lg navbar-dark bg-red fixed-top">

  <main class="container">

    <a class="navbar-brand" href="">
      <img id="logo" src="imagens/logo-pizza.png"  alt="">
    </a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>



      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">




          <li class="nav-item">
            <a class="nav-link" href="cardapio.php"><i class=""></i></span></a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="cadastro.php"><i class=""></i></span></a>
          </li>




      </ul>
      <ul class="navbar-nav mr-">
        <li class="nav-item active" style="float:right">
          <a href="logout.php">Sair</a>
        </li>
        </ul>
      </div>




    </nav>

  <div id="cadastPG" class="" >
  <div id="" class="container" style="padding-top:100px; padding-bottom:50px;">
  <div class="row">
    <div id="" class="col-md-6 offset-md-3" >
    <h2>Olá, <?php echo ucfirst($_SESSION['nome']);?>!</h2>
    <br>
    <div style="background-color:#F79F81;padding:20px">


    <h3>Seguem as nossas promoções de hoje para você</h3>
    <h3>Espero que aproveite ;)</h3> <br>
</div>
<br>
<div style="background-color:#FA5858;padding:20px">
    <h4>Pizzas:</h4>
    <br>
    <h4>Bacon</h4>
    <p>Bacon, ovos, palmito e azeitonas</p>
    <h4>Caipira</h4>
    <p>Frango desfiado, palmito e cebola</p>
    <br>
    <h4>Calabresa</h4>
    <p>Calabresa e cebola</p>
    <br>
    <h4>Canadense</h4>
    <p>Lombo canadense, azeitonas, creme de leite e milho</p>
    <br>
    <h4>Carioca</h4>
    <p>Palmito e azeitonas</p>
    <br>
  </div>
  </div>
  </div>
  </div>
    </div>


  <?php include './footer.php' ?>
