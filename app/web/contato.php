<?php include_once("header.php"); ?>

  <!-- Page Header -->
  <section class="fundo"> 
  <header class="masthead" style="background-image: url('img/house3.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Contato</h1>
            <span class="subheading">Entre em contato se tiver alguma duvida.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>Quer entrar em contato? Preencha o formulário abaixo para me enviar uma mensagem e retornaremos o mais breve possível!</p>
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Nome</label>
              <input type="text" class="form-control" placeholder="Nome" id="name" required data-validation-required-message="Por favor coloque seu nome.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Endereço de email</label>
              <input type="email" class="form-control" placeholder="Endereço de email" id="email" required data-validation-required-message="Por favor coloque seu endereço de email.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Numero de telefone</label>
              <input type="tel" class="form-control" placeholder="Numero de telefone" id="phone" required data-validation-required-message="Por favor coloque seu numero de telefone.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Mensagem</label>
              <textarea rows="5" class="form-control" placeholder="Mensagem" id="message" required data-validation-required-message="Por favor coloque uma mensagem."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <hr>

<?php include_once("footer.php"); ?>
