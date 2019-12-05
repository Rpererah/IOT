<?php include_once("header.php"); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/house4.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Sobre nós</h1>
            <span class="subheading">Dúvidas</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <p> <h2 class="post-title">Resumo</h2>
        O projeto Automação Residencial vem com o objetivo inicial de criar um controle que foque na automação oferecendo um aplicativo que entregue para o usuário uma experiência completa. O trabalho foi feito em fases, assim as mesmas serão responsáveis pela automação da casa, somando um total de seis fases. O projeto visa auxiliar pessoas com e sem deficiências, fazendo com que elas tenham uma interação mais simples na sua casa, de maneira com que lâmpadas, fechadura, alarmes e muito mais sejam manuseadas diretamente pelo celular.  </p>
        <p> <h2 class="post-title">Introdução</h2>
        Começaremos a falar sobre a automação residencial em que consiste na integração de placas Arduino em residências, para o auxílio em algumas tarefas básicas do nosso dia a dia. Podendo essas tarefas serem realizadas pelo próprio celular móvel (conectado à internet).
A importância do trabalho é facilitar a usabilidade, sustentabilidade, acessibilidade, auxiliando deficientes auditivos e visuais.
Em nosso trabalho, utilizamos varias fontes de informação como a internet, conseguimos interagir pessoalmente com um deficiente auditivo, em que ele apontou algumas dificuldades de realizar tarefas rotineiras, debatemos com alguns coordenadores e professores para nos ajudar na execução do trabalho.
Encontramos algumas dificuldades durante o andamento do trabalho por nunca ter havido uma interação com o assunto e com a linguagem de programação que o Arduino exige.
</p>

<img class="img-fluid" src="img/house.jpg" alt=""> 

<p><h2 class="post-title">Fase 1- Iluminação</h2>
  	Apesar de simples a iluminação por celular não substitui o toque no interruptor, mas a possibilidade de se programar quando desliga, ou até mesmo a distância acionar/desligar em qualquer lâmpada, ou seja, sem a necessidade de uma lâmpada especifica torna tudo atrativo esta fase compõe então o inicio da proposta do aplicativo.
    Objetivos :fazer uma área que o usuário visualize (semelhante a planta) as lâmpadas que estão ligadas e ao clicar no cômodo ter as opções da lâmpada referente (ligar, desligar, programar horário).
</p>
<p><h2 class="post-title">Fase 2-Campainha para surdos</h2>
	  Vindo da premissa que estamos ofertando que qualquer lâmpada pode acender partimos para uma campainha que auxiliara a surdos com o mesmo princípio que a lâmpada, oferta algo com valor competitivo, mostrando uma preocupação que demais empresas de automação não vê que seria, o deficiente apenas como marketing e sim como um público alvo.
    Objetivos: o interruptor de campainha ao ser acionado, liga a função campainha e aciona luzes, que vão se expandindo conforme não é atendida (pela notificação que será enviada para o celular), com opção de ignorar para desligar a campainha.
</p>
<p><h2 class="post-title">Fase 3-Alarme</h2>
	  Aqui temos mesmo principio da campainha com a única diferença de uma programação de horário, e utilização de uma luz de intensidade maior.
  </p>
<p><h2 class="post-title">Fase 4-Fechadura com abertura via cartão</h2>
  	Uma fechadura eletrônica com simples funcionamento para auxiliar pessoas cegas na abertura de portas.
    Objetivos: Abrir a fechadura com a utilização de cartão (ou via app ainda em tese apenas)
</p>
<p><h2 class="post-title">Fase 5- Irrigação programada</h2>
	  Por meio de um sensor de umidade no solo, acionar um irrigador, ou por horário pré-estabelecido, aqui está nossa marca de sustentabilidade simples, porém ideal.
  </p>

<p><h2 class="post-title">Fase 6 e última toda em teoria por hora (25/10/2019) -sistema de segurança</h2>
	  Por meio de sensores de presença internos na casa que são ativados apenas quando solicitado pelo usuário é feito o sistema de segurança ao detectar algo o usuário recebe notificação além da possibilidade de checar imagens de uma câmera interna.
</p>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
