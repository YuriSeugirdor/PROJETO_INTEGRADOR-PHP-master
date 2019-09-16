<?php include './header.php' ?>

<div id="cadastPG" class="" >



<!--FORMULARIO DE CADASTRO-->

        <div id="" class="container" style="padding-top:70px; padding-bottom:20px;">
        <div class="row">
          <div id="" class="col-md-6 offset-md-3" >
            <h3>Crie uma conta para fazer seu pedido mais rápido e conferir ofertas</h3>
            <br>

        <form id="">
          <div class="form-group">
            <label for="exampleFormControlInput1">Nome <a> *</a></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email <a> *</a></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="form-group">
            <label for="inputEmail4">Aniversário <a> *</a></label>
            <input type="date" class="form-control" id="inputEmail4" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Telefone <a> *</a></label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Crie uma Senha <a> *</a></label>
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Repita a Senha <a> *</a></label>
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <br>

          <button type="submit" class="btn btn-primary" style="background-color:#61380B; border:none;">CADASTRAR</button>
        </form>
    </div>
  </div>

</div>

    <!-- Modal -->

    <!-- ################# LOGIN ############# -->
    <!-- Modal -->
    <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div id="loginDois" class="modal-dialog" role="document">
        <div id="" class="modal-content">
          <div id="espacoLogin" class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>

            <button id="BotaoFechar" type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>
          <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Endereço de email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">

              <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
            </div>
            <a href="#TI"> Esqueceu sua senha? </a><br>
            <br>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Desejo salvar minha senha</label>
            </div>
            <button id="BotaoEntrarLogin" type="submit" class="btn btn-primary btn-lg">Entrar</button>

           </form>

          <!--<div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar mudanças</button>
          </div>-->
        </div>
      </div>
      </div>
    </div>
    </div>
    <?php include './footer.php' ?>
