<?php include './header.php' ?>

      <div id="carouselSite" class="carousel slide" data-ride="carousel">

      <div id="carousel" class="carousel-inner">

        <div class="carousel-item active">

          <img class="img-fluid d-block" src="imagens/pizza01.jpg" style="width:100%;">
        </div>

        <div class="carousel-item">
          <img class="img-fluid d-block" src="imagens/pizza02.jpg" style="width:100%;">
        </div>

        <div class="carousel-item">
          <img class="img-fluid d-block" src="imagens/pizza03.jpg"style="width:100%;">
        </div>

      </div>

      <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
      </div>


<!---HISTORIA--->

          <div id="historia">
            <div class="container">
              <div id="historiaTeste" class="row">


                      <div id="historiaTeste02" class="col-sm-12 col-md-6 col-lg-12" >
                          <h2 class="text-center alert ">DESDE 1987</h2>

                          <p class="text-md-center alert">
                            O segredo do nosso sucesso está na qualidade e no sabor das nossas massas, que junto ao atendimento diferenciado da nossa equipe é.
                          </p>
                      </div>



            </div>
          </div>
        </div>


<!---CARDAPIO--->
        <div id="cardapio" style="background: url('https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/Hfs6GALeMjaf8zhr3/videoblocks-stop-motion-animation-of-eating-a-pizza-on-dark-background_hi2n-wt4f_thumbnail-full01.png');width:100%;">
          <div class="container">
            <div class="row">


                    <div id="cardapioCorpo" class="col-sm-12 col-md-6 col-lg-12" >
                        <h2 class="text-center alert">CARDÁPIO</h2>

                        <p class="text-md-center alert">Nosso cardápio atende aos mais variados tipos de gostos. <br>
                          Conheça nossas opções de pizzas e diferentes massas.
                        </p>


                        <div id="botaoCARDA" class="text-center">
                          <a href="cardapio.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">DÊ UMA OLHADA</a>
                        </div>
                    </div>

          </div>
        </div>
      </div>

<div id="contato">
  <div class="container" id="contatoCorpo">
    <div class="row">


<!--CONTADTO-->
      <div id="">
      <div class="container">
      <div class="row" id="contato01">

              <div  class="col-sm-12 col-md-6 col-lg-7">
                  <h2 class="text-md-center alert alert display-3">CONTATO</h2>

                  <p class="text-md-center alert display-4">
                    <i class="fas fa-envelope mr-3"></i>ctt@modopizza.com</p>
                  <p class="text-md-center alert display-4">
                    <i class="fas fa-phone mr-3"></i> 21 2345-6788</p>

              </div>
<!--ENVIE SEUS COMENTÁRIOS-->
              <div class="col-sm-12 col-md-6 col-lg-5">
                  <h2 class="text-md-center alert display-3">CONTATE A MODO PIZZA</h2>

                  <div id="botaoFC" class="text-center">
                    <a href="faleconosco.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">FALE CONOSCO</a>
                  </div>

              </div>

              </div>
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
            <button href="posLogin.html" id="BotaoEntrarLogin" type="submit" class="btn btn-primary btn-lg">Entrar</button>

           </form>

          <!--<div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar mudanças</button>
          </div>-->
        </div>
      </div>
      </div>
    </div>
    <?php include './footer.php' ?>
