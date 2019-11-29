<?php include_once("header.php"); ?>

    <main>
    <h1>Login</h1>
    <form action="autentica.php" method="post">
        <div class="form-group">
          <label for="usuario">Login</label>
          <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
          <label for="password">Senha</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </main>

<?php include_once("footer.php"); ?>