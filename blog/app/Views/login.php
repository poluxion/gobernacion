<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/style.css">
    <title>LOGIN</title>
  </head>
  <body>
  <div class="container">   
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
        <center>
          <h1>Login</h1>
          </center>
          <form action="<?php echo base_url('/login') ?>" method="POST" style="background-color: #E5E7E9;">
            <label class="usuario" for= "usuario" > Usuario:</label>
            <input type="text" name="usuario" class="form-control" placeholder="juanita" required>
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="juanita123" class="form-control" required>
            <br>
            <center>
            <button class="btn btn-success">Entrar</button>
            </center>
          </form>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>