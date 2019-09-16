<?php session_start(); include './header.php' ?>



<div id="cadastPG" class="" >





        <div id="" class="container" style="padding-top:70px; padding-bottom:20px;">
        <div class="row">
          <div id="" class="col-md-6 offset-md-3" >
            <h3>Crie uma conta para fazer seu pedido mais rápido e conferir ofertas</h3>
            <br>

        <form form action="cadastrar.php" method="POST">
          <div class="form-group">
            <label for="exampleFormControlInput1">Nome <a> *</a></label>
            <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Seu nome">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Usuario <a> *</a></label>
            <input name="usuario" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome de usuário">
          </div>


          <div class="form-group">
            <label for="exampleFormControlInput1">Digite uma Senha <a> *</a></label>
            <input name="senha" type="password" class="form-control" id="exampleFormControlInput1" placeholder="Digite uma senha">
          </div>

          <br>
          <hr>
              <?php
              if ($_SESSION['status_cadastro']):
               ?>

               <div class="notification is-sucess">
               <p>Cadastro efetuado!</p>
               <p>Faça login informando o seu usuário e senha <a href="pglogin.php">aqui</a></p>
              </div>
               <?php
                 endif;
                 unset($_SESSION['status_cadastro']);
                ?>
                <?php
                if ($_SESSION['usuario_existe']):
                 ?>
                 <div class="notification is-info">
                   <p>ERRO: Usuário escolhido ja existe. Informe outro e tente novamente</p>
                 </div>
                 <?php
                endif;
                unset($_SESSION['usuario_existe']);

                  ?>

          <hr>
          <br>

          <button type="submit" class="btn btn-primary" style="background-color:#61380B; border:none;">CADASTRAR</button>
        </form>
    </div>
  </div>

</div>




    </div>
    <?php include './footer.php' ?>
