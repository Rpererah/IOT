<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="css/foundation.css" />
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/social.css">
        <link rel="stylesheet" href="css/artigos.css">
        <title>Casa Automatica</title>
    </head>
    <body>
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="#"> <img class="logo" width="65px" src="images/logo.png"><strong">Home Tech</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar1">
    <ul class="navbar-nav ml-auto"> 
<li class="nav-item active">
<a class="nav-link" href="http://bootstrap-ecommerce.com">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item"><a class="nav-link" href="html-components.html"> Portifolio </a></li>
<li class="nav-item"><a class="nav-link" href="html-components.html"> Blog </a></li>
<li class="nav-item"><a class="nav-link" href="html-components.html"> Login </a></li>
    </ul>
  </div>
  </div>
</nav>
<?php /*
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Casa Automatica</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.php">Portfólio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <?php if(!isset($_SESSION["usuario"])) { ?>
                        <a class="nav-link" href="login.php">Login</a>
                        <?php } else { ?>
                        <a class="nav-link" href="logout.php">Deslogar</a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </nav>
    </header> 
    */ ?>

