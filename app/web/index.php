<?php include_once "partials/userheader.php"; ?>
<?php
  require_once "src/helpers/banco.php";
  require_once "src/models/usuarioDAO.php";
  $usuarioDAO = new UsuarioDAO($pdo);
  $listaDeUsuarios = $usuarioDAO->readAll();
 
?>

<?php include_once "partials/head.php"; ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/house2.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Casa Automática</h1>
            <span class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <body> <!-- Inicio do corpo da página -->

... <!-- Conteúdo da página -->

<div vw class="enabled">
  <div vw-access-button class="active"></div>
  <div vw-plugin-wrapper>
    <div class="vw-plugin-top-wrapper"></div>
  </div>
</div>

  <!-- section Content -->
  <section class="fundo">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="posts.php">
        </div>
        <hr>
        <div class="post-preview">
          <a href="posts.php">
            <h2 class="post-title">
            O que é automação?
            </h2>
            <h3 class="post-subtitle">
            “É uma nova experiência em moradia, que proporciona conexão e controle da sua casa e dos seus aparelhos eletrônicos, estando você em qualquer lugar, desde um keyboard, ou em um painel, bem como na palma da sua mão, conectado a uma rede wireless. É o resultado da integração de seus aparelhos com comandos automáticos controlados até mesmo por um smartphone ou computador”
            </h3>
          </a>
          <p class="post-meta">Postado por
          <a href="#">Julio</a>
            04/12/2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="posts.php">
            <h2 class="post-title">
            O que dá para automatizar?
            </h2>
            <h3 class="post-subtitle">
            “quase tudo que tem acionamento eletrônico” pode ser automatizado. 
            </h3>
          </a>
          <p class="post-meta">Postado por
          <a href="#">Julio</a>
            04/12/2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="posts.php">
            <h2 class="post-title">
            Qual o custo da automação?
            </h2>
            <h3 class="post-subtitle">
            “Tudo depende do grau de integração desejado pelo morador”, explica Muratori.
            </h3>
          </a>
          <p class="post-meta">Postado por
          <a href="#">Julio</a>
            04/12/2019</p>
        </div>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="posts.php"> Postagens Completas &rarr;</a>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
  new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>
</body> <!-- Fim do corpo da página -->
  
  <?php include_once("footer.php"); ?>
</section>