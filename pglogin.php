<?php include './header.php' ?>


<div id="cadastPG" class="" >



<!--FORMULARIO DE CADASTRO-->

        <div id="" class="container" style="padding-top:70px; padding-bottom:20px;">
        <div class="row">
          <div id="" class="col-md-6 offset-md-3" >
            <h3>Entre com o seu usuário e senha</h3>
            <br>

            <form form action="login.php" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input name="usuario" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome de usuario">

              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input  name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
            <br>

            <?php
            if(isset($_SESSION['nao_autenticado'])):
            ?>
            <div class="notification is-danger">
              <p style="color: red;">Usuário ou senha inválidos.</p>
            </div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>

            <br>

              <button id="BotaoEntrarLogin" type="submit" class="btn btn-primary btn-lg">Entrar</button>
              <br>
              <br>
                <p class="" style="color:#B18904">Ainda não tem cadastro?  <a href="cadastrar.php">cadastre-se</a></p>

             </form>
    </div>
  </div>

</div>



    </div>
    <?php include './footer.php' ?>
