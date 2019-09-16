<?php include './header.php' ?>

<div id="faleconsPG" class="">




<!---HISTORIA--->

<div id="" class="container">
<div class="row">
  <div id="" class="col-md-6 offset-md-3" >

    <h3>ENVIE SEU COMENTÁRIO, DÚVIDA OU RECLAMAÇÃO</h3>
    <br>
<p>Nós valorizamos sua opinião e queremos ouvir sua experiência nos nossos restaurantes.</p>

<p id="subtextFC" >Por favor, preencha o formulário abaixo. *Campos Obrigatórios

</p>
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
    <label for="exampleFormControlInput1">Telefone <a> *</a></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  <div class="form-group">
  <label for="inputEstado">*ASSUNTO</label>
  <select id="inputEstado" class="form-control">
    <option selected>Selecione uma das opções.</option>
    <option>SUGESTÃO</option>
    <option>RECLAMAÇÃO</option>
    <option>ELOGIO</option>
    <option>OUTROS</option>
  </select>
</div>

  <div class="form-group">
      <label for="exampleFormControlTextarea1">Mensagem</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  <br>

  <button type="submit" class="btn btn-primary" style="background-color:#DF7401; border:none;">ENVIAR COMENTÁRIO</button>
</form>
</div>
</div>



<!-- Modal -->
<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
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
    <p>ESQUECEU SUA SENHA?</p>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Desejo salvar minha senha</label>
    </div>
    <button type="submit" class="btn btn-primary" >Entrar</button>
     <button type="button" class="btn btn-secundary" data-dismiss="modal">Fechar</button>
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

    </main>



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
