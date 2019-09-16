<?php include './header.php' ?>
<div class="">


<div class="" style="background-color:#FFBF00">


<!--CARDAPIO-->

      <div class="container" id="cardapioPizzas">
      <div class="row justify-content-center" >

              <div class="col-4">
                  <h2 class="text-md-center alert alert display-4">Pizzas</h2>
                  <br>

                    <h4>Alho e óleo</h4>
                    <p>Alho frito</p>
                    <br>
                    <h4>Americana</h4>
                    <p>Presunto, calabresa moída, cebola, Catupiry e azeitonas</p>
                    <br>
                    <h4>Atum</h4>
                    <p>Atum, cebola e azeitonas</p>
                    <br>
                    <h4>Bacon</h4>
                    <p>Bacon, ovos, palmito e azeitonas</p>
                    <br>
                    <h4>Caipira</h4>
                    <p>Frango desfiado, palmito e cebola</p>
                    <br>
                    <h4>Calabresa</h4>
                    <p>Calabresa e cebola</p>
                    <br>
                    <h4>Califórnia</h4>
                    <p>Presunto, abacaxi, pêssego, Catupiry, uvas passas e parmesão</p>
                    <br>
                    <h4>Canadense</h4>
                    <p>Lombo canadense, azeitonas, creme de leite e milho</p>
                    <br>
                    <h4>Carioca</h4>
                    <p>Palmito e azeitonas</p>
                    <br>
                    <h4>Catupiry</h4>
                    <p>Mussarela e Catupiry</p>
                    <br>
                    <h4>Champignon com Catupiry</h4>
                    <p>Champignon e Catupiry</p>
                    <br>
                    <h4>Frango com Catupiry</h4>
                    <p>Catupiry e frango desfiado</p>
                    <br>
                    <h4>Mussarela</h4>
                    <p>Mussarela e orégano</p>
                    <br>
                    <h4>Mussarela italiana</h4>
                    <p>Mussarela rodelas de tomate e cebola</p>
                    <br>
                    <h4>Palmito com Catupiry</h4>
                    <p>Palmito fatiado e Catupiry</p>
                    <br>
                    <h4>Peperone</h4>
                    <p>Peperone e azeitonas</p>
                    <br>
                    <h4>Portuguesa</h4>
                    <p>Presunto, calabresa, ovos, ervilhas, azeitonas, cebola, pimentão e tomate</p>
                    <br>
                    <h4>Quatro queijos</h4>
                    <p>Mussarela, provolone, parmesão e Catupiry</p>
                    <br>

              </div>
<!--ENVIE SEUS COMENTÁRIOS-->
              <div class="col-4">
                  <h2 class="text-md-center alert display-4">Pizzas Doces</h2>
                  <br>
                  <h4>Banana</h4>
                  <p>Mussarela, banana, canela e açúcar
                  </p>
                  <br>
                  <h4>Chocobana</h4>
                  <p>Mussarela, banana, canela, açúcar e cobertura de chocolate
                  </p>
                  <br>
                  <h4>Chocolate</h4>
                  <p>Mussarela, cobertura de chocolate, chocolate granulado
                  ou castanha de caju picada</p>
                  <br>
                  <h4>Chocolate com Morango</h4>
                  <p>Mussarela, morango e cobertura de chocolate</p>
                  <br>
                  <h4>Dinamarquesa</h4>
                  <p>Mussarela, pêssego, figo e abacaxi</p>
                  <br>
                  <h4>Romeu e Julieta</h4>
                  <p>Mussarela, goiabada e catupiry</p>


              </div>

              </div>
            </div>







<!---CARDAPIO--->


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
